# Estrutura do Projeto - Doce del Rio

## 📁 Hierarquia Completa

```
doce-del-rio/
├── app/                      # Lógica da aplicação
│   ├── controller/           # Controllers (requisições)
│   │   └── MatriculaController.php
│   ├── model/                # Models (banco de dados)
│   │   └── AlunoModel.php
│   ├── middleware/           # Middlewares (validações)
│   │   └── Middleware.php
│   ├── services/             # Services (regras de negócio)
│   │   └── MatriculaService.php
│   ├── router/               # Router (roteamento)
│   │   └── Router.php
│   ├── migration/            # Banco de dados e migrações
│   │   ├── database.sqlite
│   │   └── migration.php
│   └── data/                 # Dados estáticos
│       └── receitas.json
│
├── view/                     # Interface (frontend)
│   ├── css/                  # Folhas de estilo
│   │   └── style.css
│   ├── js/                   # Scripts JavaScript
│   │   └── script.js
│   ├── view.php              # Templates PHP
│   └── *.html                # Arquivos HTML
│
├── public/                   # Raiz web (quando usar servidor)
│
├── tests/                    # Testes e atividades
│   └── atividade/
│
├── docs/                     # Documentação
│   ├── schemas/              # Schemas do banco (SQL, DBML)
│   └── notas/                # Anotações do projeto
│
├── index.php                 # Ponto de entrada
├── config.php                # Configurações
├── autoload.php              # Carregador automático de classes
├── .gitignore                # Exclusões do Git
└── README.md                 # Documentação principal
```

## 🔄 Fluxo de Requisição

```
Navegador
   ↓
index.php (carrega config + autoload)
   ↓
Router::direcionar() (identifica GET/POST)
   ↓
Middleware::validar() (validação de entrada)
   ↓
Controller::processarMatricula()
   ↓
Service::processarRegras() (regras de negócio)
   ↓
Model::save() (persiste no SQLite)
   ↓
View retorna ao usuário
```

## 🛠️ Como Adicionar Novas Funcionalidades

1. **Criar novo Model** em `app/model/NovoModel.php`
2. **Criar novo Service** em `app/services/NovoService.php`
3. **Criar novo Controller** em `app/controller/NovoController.php`
4. **Adicionar rota** em `app/router/Router.php`
5. **Criar View** em `view/novo.php`

O autoload registrará automaticamente as classes novas!

## 🗄️ Banco de Dados

- **Local:** `app/migration/database.sqlite`
- **Schema:** `docs/schemas/schema.dbml`
- **Constante:** `DB_PATH` definida em `config.php`

## 🔐 Arquivos Ignorados pelo Git

```
*.sqlite          # Banco de dados não versionado
.env              # Variáveis de ambiente
.DS_Store         # Sistema macOS
```
