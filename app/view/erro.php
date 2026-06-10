<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 600px; margin: 50px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .erro { background: #ffebee; color: #c62828; padding: 20px; border-radius: 8px; border-left: 4px solid #f44336; }
        h1 { color: #c62828; }
        a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <div class="erro">
            <h1>⚠️ Erro</h1>
            <p><?php echo htmlspecialchars($mensagem); ?></p>
            <a href="/">Voltar ao início</a>
        </div>
    </div>
</body>
</html>
