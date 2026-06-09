# Schemas do Banco de Dados

## Tabelas

### alunos
Armazena informações dos alunos matriculados.

| Coluna | Tipo | Descrição |
|--------|------|-----------|
| id | INTEGER | ID único (PK, autoincrementado) |
| nome | VARCHAR(150) | Nome do aluno (obrigatório) |
| idade | INTEGER | Idade do aluno (obrigatório, > 0) |
| curso | VARCHAR(100) | Curso selecionado (obrigatório) |
| data_criacao | DATETIME | Data de registro |
| data_atualizacao | DATETIME | Data da última atualização |

## Arquivos

- **init.sql** - Script de inicialização (cria tabelas)
- **schema.dbml** - Diagrama ER em formato DBML
- **Untitled.sql** - Queries adicionais (se houver)

## Como usar

### Inicializar banco no SQLite

```bash
sqlite3 app/migration/database.sqlite < docs/schemas/init.sql
```

### Acessar o banco manualmente

```bash
sqlite3 app/migration/database.sqlite
```

### Queries úteis

```sql
-- Ver todas as tabelas
.tables

-- Ver schema de uma tabela
.schema alunos

-- Listar todos os alunos
SELECT * FROM alunos;

-- Contar alunos por curso
SELECT curso, COUNT(*) as total FROM alunos GROUP BY curso;
```
