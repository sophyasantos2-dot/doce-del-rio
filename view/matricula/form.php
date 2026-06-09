<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Matrícula</title>
    <link rel="stylesheet" href="/view/css/style.css">
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 600px; margin: 50px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; text-align: center; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; color: #333; }
        input, select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; font-size: 14px; }
        input:focus, select:focus { border-color: #007bff; outline: none; }
        button { width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .erro { background: #ffebee; color: #c62828; padding: 12px; border-radius: 4px; margin-bottom: 20px; border-left: 4px solid #c62828; }
        .sucesso { background: #e8f5e9; color: #2e7d32; padding: 12px; border-radius: 4px; margin-bottom: 20px; border-left: 4px solid #4caf50; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 Nova Matrícula</h1>

        <?php if (!empty($erros)): ?>
            <div class="erro">
                <strong>Erros encontrados:</strong>
                <ul>
                    <?php foreach ($erros as $erro): ?>
                        <li><?php echo htmlspecialchars($erro); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="nome">Nome do Aluno:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" min="1" max="150" required>
            </div>

            <div class="form-group">
                <label for="curso">Curso:</label>
                <select id="curso" name="curso" required>
                    <option value="">-- Selecione um curso --</option>
                    <option value="PHP Backend">PHP Backend</option>
                    <option value="Frontend">Frontend</option>
                </select>
            </div>

            <button type="submit">Enviar Matrícula</button>
        </form>

        <hr style="margin-top: 30px;">
        <p><a href="/">Voltar</a></p>
    </div>
</body>
</html>
