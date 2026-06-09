<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doce del Rio - Sistema de Matrícula</title>
    <link rel="stylesheet" href="/view/css/style.css">
    <style>
        body { font-family: Arial, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0; }
        .container { max-width: 800px; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 10px 40px rgba(0,0,0,0.2); text-align: center; }
        h1 { color: #333; margin-bottom: 10px; font-size: 2.5em; }
        p { color: #666; font-size: 1.1em; margin: 10px 0; }
        .button { display: inline-block; margin-top: 20px; padding: 15px 40px; background: #667eea; color: white; text-decoration: none; border-radius: 8px; font-size: 1.1em; transition: background 0.3s; }
        .button:hover { background: #764ba2; }
        .info { margin-top: 30px; padding: 20px; background: #f5f5f5; border-radius: 8px; text-align: left; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🍰 Doce del Rio</h1>
        <p>Site de Receitas de Sobremesas - Sistema de Matrícula</p>
        
        <a href="/index.php" class="button">Iniciar Matrícula</a>
        
        <div class="info">
            <h3>Sobre o Sistema</h3>
            <p>Este é um sistema de matrícula refatorado com:</p>
            <ul style="text-align: left;">
                <li>✅ Arquitetura MVC com Repository Pattern</li>
                <li>✅ Injeção de Dependência (DI)</li>
                <li>✅ Camada de Banco de Dados isolada</li>
                <li>✅ Validação e Sanitização segura</li>
                <li>✅ Tratamento profissional de exceções</li>
            </ul>
        </div>
    </div>
</body>
</html>