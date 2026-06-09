-- Script de inicialização do banco de dados SQLite
-- Tabela: alunos

CREATE TABLE IF NOT EXISTS alunos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome VARCHAR(150) NOT NULL,
    idade INTEGER NOT NULL CHECK(idade > 0),
    curso VARCHAR(100) NOT NULL,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Índices para melhor performance
CREATE INDEX IF NOT EXISTS idx_alunos_nome ON alunos(nome);
CREATE INDEX IF NOT EXISTS idx_alunos_curso ON alunos(curso);

-- Exemplo de inserção de teste
-- INSERT INTO alunos (nome, idade, curso) VALUES ('João Silva', 17, 'PHP Backend');
