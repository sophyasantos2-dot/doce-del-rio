<?php
class AlunoModel {
    // Propriedades privadas (Regra de Ouro da POO)
    private $nome;
    private $idade;
    private $curso;

    // Getters e Setters
    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }
    
    public function getIdade() { return $this->idade; }
    public function setIdade($idade) { $this->idade = $idade; }
    
    public function getCurso() { return $this->curso; }
    public function setCurso($curso) { $this->curso = $curso; }

    // Salva no banco de dados
    public function save() {
        $pdo = new PDO('sqlite:database.sqlite');
        
        // Prepared Statement para evitar SQL Injection
        $sql = "INSERT INTO alunos (nome, idade, curso) VALUES (:nome, :idade, :curso)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':idade', $this->idade);
        $stmt->bindValue(':curso', $this->curso);
        
        return $stmt->execute();
    }
}
?>

