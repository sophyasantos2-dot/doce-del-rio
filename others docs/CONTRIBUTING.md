# Guia de Contribuição - Doce del Rio

## 🎯 Padrões de Código

### Nomenclatura
- **Classes:** PascalCase (ex: `MatriculaController`)
- **Funções:** camelCase (ex: `processarMatricula()`)
- **Constantes:** UPPER_CASE (ex: `DB_PATH`)
- **Variáveis:** camelCase (ex: `$dadosAprovados`)

### Estrutura de Pastas
Sempre coloque o arquivo na pasta correta:
- Lógica de requisição → `app/controller/`
- Dados e persistência → `app/model/`
- Validações → `app/middleware/`
- Regras de negócio → `app/services/`
- Roteamento → `app/router/`

### Padrão de Commit

```
feat: adiciona validação de email
fix: corrige bug na esterificação
docs: atualiza documentação
refactor: reorganiza estrutura MVC
```

## ✅ Checklist antes de Commit

- [ ] Código sem erros de sintaxe
- [ ] Classes organizadas nas pastas corretas
- [ ] Variáveis com nomes descritivos
- [ ] Documentação atualizada
- [ ] Banco de dados não foi versionado (gitignore)

## 🚀 Workflow Git

```bash
# Criar branch para feature
git checkout -b feat/nova-funcionalidade

# Desenvolver e testar
# ... editar arquivos ...

# Stage total
git add .

# Commit descritivo
git commit -m "feat: implementa nova funcionalidade"

# Push
git push origin feat/nova-funcionalidade
```

## 🧪 Testando Localmente

```bash
# Iniciar servidor PHP
php -S localhost:8000

# Abrir navegador
http://localhost:8000
```
