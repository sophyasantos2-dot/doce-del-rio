<?php
/**
 * Entidade Aluno (POJO - Plain Old PHP Object)
 * 
 * Responsabilidade ÚNICA: Representar os dados de um aluno.
 * NÃO contém lógica de banco de dados (SQL, PDO, etc).
 * 
 * Toda persistência é responsabilidade do Repositório.
 */
class AlunoModel {
    private $id;
    private $nome;
    private $idade;
    private $curso;
    private $dataCriacao;

    /**
     * Construtor
     */
    public function __construct($nome = null, $idade = null, $curso = null, $id = null, $dataCriacao = null) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;
        $this->id = $id;
        $this->dataCriacao = $dataCriacao;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getIdade() { return $this->idade; }
    public function getCurso() { return $this->curso; }
    public function getDataCriacao() { return $this->dataCriacao; }

    // Setters
    public function setId($id) { $this->id = $id; return $this; }
    public function setNome($nome) { $this->nome = $nome; return $this; }
    public function setIdade($idade) { $this->idade = $idade; return $this; }
    public function setCurso($curso) { $this->curso = $curso; return $this; }
    public function setDataCriacao($data) { $this->dataCriacao = $data; return $this; }

    /**
     * Converte a entidade para array
     */
    public function toArray() {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'idade' => $this->idade,
            'curso' => $this->curso,
            'dataCriacao' => $this->dataCriacao
        ];
    }
}
?>

