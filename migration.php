<?php
class Migration {
    public static function executar() {
        // Conecta (e cria, se não existir) o arquivo do banco de dados
        $pdo = new PDO('sqlite:database.sqlite');
        
        // Comando SQL para criar a tabela
        $sql = "CREATE TABLE IF NOT EXISTS alunos (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nome TEXT,
            idade INTEGER,
            curso TEXT
        )";
        
        $pdo->exec($sql);
        echo "Banco de dados e tabela criados com sucesso!\n";
    }
}

// Executa a função imediatamente ao rodar o arquivo
Migration::executar();
?>

