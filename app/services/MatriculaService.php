<?php
/**
 * Serviço de Matrícula (Regras de Negócio)
 * 
 * Responsabilidade: Validar regras complexas de negócio.
 * 
 * REGRA FUNDAMENTAL: O Service recebe suas dependências via construtor.
 * O Service NUNCA instancia suas próprias dependências.
 * O Service NUNCA faz SQL diretamente. Sempre usa o Repositório.
 */
class MatriculaService {
    private $alunoRepository;

    /**
     * Construtor com Injeção de Dependência
     * 
     * @param IAlunoRepository $alunoRepository
     */
    public function __construct(IAlunoRepository $alunoRepository) {
        $this->alunoRepository = $alunoRepository;
    }

    /**
     * Processa a matrícula de um aluno
     * 
     * Valida as regras de negócio e persiste no banco.
     * Lança BusinessRuleException se alguma regra for violada.
     * 
     * @param array $dados Dados do formulário
     * @return int ID do aluno matriculado
     * @throws BusinessRuleException
     */
    public function matricular(array $dados) {
        // Validar regra 1: Idade mínima
        if ($dados['idade'] < 16) {
            throw new BusinessRuleException(
                "O aluno deve ter pelo menos 16 anos para este curso."
            );
        }

        // Validar regra 2: Idade máxima (exemplo)
        if ($dados['idade'] > 100) {
            throw new BusinessRuleException(
                "A idade inserida parece estar incorreta. Máximo 100 anos."
            );
        }

        // Validar regra 3: Curso válido
        $cursosValidos = ['PHP Backend', 'Frontend'];
        if (!in_array($dados['curso'], $cursosValidos)) {
            throw new BusinessRuleException(
                "Curso inválido. Escolha entre: " . implode(', ', $cursosValidos)
            );
        }

        // Se passou todas as validações, cria e persiste a entidade
        $aluno = new AlunoModel(
            $dados['nome'],
            $dados['idade'],
            $dados['curso']
        );

        try {
            $alunoId = $this->alunoRepository->save($aluno);
            return $alunoId;
        } catch (Exception $e) {
            throw new BusinessRuleException(
                "Erro ao processar matrícula: " . $e->getMessage()
            );
        }
    }

    /**
     * Busca todos os alunos
     * 
     * @return array
     */
    public function listarAlunos() {
        return $this->alunoRepository->findAll();
    }

    /**
     * Busca aluno por ID
     * 
     * @param int $id
     * @return AlunoModel|null
     */
    public function obterAluno($id) {
        return $this->alunoRepository->find($id);
    }
}
?>
