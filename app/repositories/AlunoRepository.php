<?php
/**
 * Repositório de Alunos (Data Access Layer)
 * 
 * Implementa a Interface IAlunoRepository.
 * Responsabilidade ÚNICA: Gerenciar persistência e consultas de Alunos.
 * 
 * Toda a lógica SQL fica aqui. O Service nunca toca em SQL.
 */
class AlunoRepository implements IAlunoRepository {
    private $pdo;

    /**
     * Construtor com Injeção de Dependência
     * 
     * @param PDO $pdo Instância do banco de dados
     */
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Salva um novo aluno no banco
     * 
     * @param AlunoModel $aluno
     * @return int ID do aluno inserido
     */
    public function save(AlunoModel $aluno) {
        $sql = "INSERT INTO alunos (nome, idade, curso) VALUES (:nome, :idade, :curso)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':nome', $aluno->getNome());
        $stmt->bindValue(':idade', $aluno->getIdade());
        $stmt->bindValue(':curso', $aluno->getCurso());

        if (!$stmt->execute()) {
            throw new Exception("Erro ao salvar aluno no banco de dados");
        }

        return $this->pdo->lastInsertId();
    }

    /**
     * Busca um aluno pelo ID
     * 
     * @param int $id
     * @return AlunoModel|null
     */
    public function find($id) {
        $sql = "SELECT id, nome, idade, curso, data_criacao FROM alunos WHERE id = :id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$resultado) {
            return null;
        }

        return $this->hydrate($resultado);
    }

    /**
     * Busca todos os alunos
     * 
     * @return array
     */
    public function findAll() {
        $sql = "SELECT id, nome, idade, curso, data_criacao FROM alunos ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $alunos = [];

        foreach ($resultados as $row) {
            $alunos[] = $this->hydrate($row);
        }

        return $alunos;
    }

    /**
     * Deleta um aluno pelo ID
     * 
     * @param int $id
     * @return bool
     */
    public function delete($id) {
        $sql = "DELETE FROM alunos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    /**
     * Busca alunos por um critério
     * 
     * @param string $campo
     * @param mixed $valor
     * @return array
     */
    public function findBy($campo, $valor) {
        $camposPermitidos = ['nome', 'curso', 'idade'];
        
        if (!in_array($campo, $camposPermitidos)) {
            throw new Exception("Campo inválido: " . $campo);
        }

        $sql = "SELECT id, nome, idade, curso, data_criacao FROM alunos WHERE $campo = :valor ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':valor', $valor);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $alunos = [];

        foreach ($resultados as $row) {
            $alunos[] = $this->hydrate($row);
        }

        return $alunos;
    }

    /**
     * Converte um array de resultados SQL em entidade AlunoModel
     * 
     * @param array $data
     * @return AlunoModel
     */
    private function hydrate(array $data) {
        return new AlunoModel(
            $data['nome'] ?? null,
            $data['idade'] ?? null,
            $data['curso'] ?? null,
            $data['id'] ?? null,
            $data['data_criacao'] ?? null
        );
    }
}
