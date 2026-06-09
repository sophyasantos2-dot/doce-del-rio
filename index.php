<?php
/**
 * Arquivo Principal - Ponto de Entrada da Aplicação
 * 
 * Responsabilidade ÚNICA: Atuar como um Container de Injeção de Dependência.
 * 
 * Fluxo:
 * 1. Carregar configurações
 * 2. Instanciar todas as dependências (Database, Repository, Service, Controller)
 * 3. "Montar" o Controller com suas dependências
 * 4. Chamar o Router
 */

// Carregar configurações
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/autoload.php';

try {
    // ========== CONTAINER DE INJEÇÃO DE DEPENDÊNCIA ==========
    
    // 1. Instanciar o Banco de Dados (Singleton)
    $database = Database::getInstance();
    $pdo = $database->getConnection();

    // 2. Instanciar o Repositório com a conexão PDO
    $alunoRepository = new AlunoRepository($pdo);

    // 3. Instanciar o Service com o Repositório (DI)
    $matriculaService = new MatriculaService($alunoRepository);

    // 4. Instanciar o Controller com o Service (DI)
    $matriculaController = new MatriculaController($matriculaService);

    // 5. Instanciar o Router com o Controller (DI)
    $router = new Router($matriculaController);

    // ========== EXECUTAR A APLICAÇÃO ==========
    $router->direcionar();

} catch (Exception $e) {
    // Erro durante inicialização (não esperado)
    http_response_code(500);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Erro na Aplicação</title>
        <style>
            body { font-family: Arial; background: #f5f5f5; }
            .container { max-width: 800px; margin: 50px auto; }
            .error { background: #ffebee; border: 1px solid #f44336; padding: 20px; border-radius: 4px; }
            h1 { color: #c62828; }
            pre { background: #fff; padding: 10px; overflow: auto; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="error">
                <h1>⚠️ Erro na Aplicação</h1>
                <p>Desculpe, ocorreu um erro inesperado. A equipe de suporte foi notificada.</p>
                <p><a href="/">Voltar ao início</a></p>
                
                <?php if (config('app.debug')): ?>
                    <hr>
                    <h3>Detalhes do Erro (Debug):</h3>
                    <pre><?php echo htmlspecialchars($e->getMessage() . "\n\n" . $e->getTraceAsString()); ?></pre>
                <?php endif; ?>
            </div>
        </div>
    </body>
    </html>
    <?php
}

