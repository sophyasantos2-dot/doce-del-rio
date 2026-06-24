<?php
class Migration {
    public static function executar() {
        $databasePath = __DIR__ . '/banco.sqlite';
        $pdo = new PDO('sqlite:' . $databasePath);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE TABLE IF NOT EXISTS alunos (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nome TEXT NOT NULL,
            idade INTEGER NOT NULL,
            curso TEXT NOT NULL,
            data_criacao TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
        )";

        $pdo->exec($sql);
        echo "Banco de dados e tabela criados com sucesso!\n";
    }
}

Migration::executar();
?>

