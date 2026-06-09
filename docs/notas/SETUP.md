# 🚀 Setup Rápido - Doce del Rio

## Pré-requisitos
- PHP 7.4+
- Git
- Editor de texto (VS Code recomendado)

## ⚡ Inicialização

### 1. Clone o repositório
```bash
git clone https://github.com/seu-usuario/doce-del-rio.git
cd doce-del-rio
```

### 2. Configure o ambiente (opcional)
```bash
cp .env.example .env
# Editar .env conforme necessário
```

### 3. Inicie o servidor PHP
```bash
php -S localhost:8000
```

### 4. Acesse no navegador
```
http://localhost:8000
```

## 📝 Estrutura Principal

```
├── app/              ← Lógica da aplicação (MVC)
├── view/             ← Interface (HTML, CSS, JS)
├── docs/             ← Documentação
├── tests/            ← Testes e atividades
├── public/           ← Raiz web (futuro)
├── index.php         ← Ponto de entrada
├── config.php        ← Configurações
└── autoload.php      ← Carregamento automático
```

## 📖 Documentação

- **ESTRUTURA.md** - Hierarquia completa do projeto
- **CONTRIBUTING.md** - Padrões de código e commits
- **docs/notas/** - Anotações do projeto
- **docs/schemas/** - Schema do banco de dados

## 🔧 Desenvolvimento

### Adicionar nova funcionalidade

1. Crie um novo Model em `app/model/`
2. Crie um novo Service em `app/services/`
3. Crie um novo Controller em `app/controller/`
4. Adicione a rota em `app/router/Router.php`
5. Crie a view em `view/`

### Testar

```bash
# Abrir navegador e testar manualmente
http://localhost:8000

# Ou testar fluxo específico
# GET  → Exibe formulário
# POST → Processa e salva
```

## 🐛 Troubleshooting

### Erro: "database.sqlite not found"
- Certifique-se que `app/migration/database.sqlite` existe
- Se não, execute as migrações em `app/migration/migration.php`

### Erro: "Class not found"
- Verifique se o arquivo está em `app/controller/`, `app/model/`, etc.
- O autoload procura por sufixos: `Controller`, `Model`, `Service`

### Erro: "Permission denied"
- No Windows, isso não deve ocorrer normalmente
- No Linux/Mac: `chmod 755 app/migration/`

## 📊 Commits Importantes

Após fazer mudanças:

```bash
git add .
git commit -m "feat: descrição da mudança"
git push origin main
```

Ver mais em **CONTRIBUTING.md**
