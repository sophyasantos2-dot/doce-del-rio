<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula Realizada</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 600px; margin: 50px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .sucesso { background: #e8f5e9; color: #2e7d32; padding: 20px; border-radius: 8px; text-align: center; border-left: 4px solid #4caf50; }
        h1 { color: #2e7d32; }
        .buttons { margin-top: 20px; }
        a { display: inline-block; margin-right: 10px; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <div class="sucesso">
            <h1>✅ Matrícula Realizada com Sucesso!</h1>
            <p><strong>Aluno:</strong> <?php echo htmlspecialchars($nome); ?></p>
            <p><strong>ID:</strong> <?php echo $alunoId; ?></p>
        </div>

        <div class="buttons">
            <a href="/">Fazer nova matrícula</a>
        </div>
    </div>
</body>
</html>
