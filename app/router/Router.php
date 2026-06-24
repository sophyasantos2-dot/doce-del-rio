<?php
/**
 * Roteador da Aplicação
 * 
 * Responsabilidade: Dirigir requisições para o Controller apropriado.
 * 
 * Espera que o Controller já tenha suas dependências injetadas.
 */
class Router {
    private $controller;

    /**
     * Construtor com o Controller injetado
     * 
     * @param MatriculaController $controller
     */
    public function __construct(MatriculaController $controller) {
        $this->controller = $controller;
    }

    /**
     * Direciona a requisição para o método apropriado do Controller
     */
    public function direcionar() {
        $metodo = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $caminho = $this->getCaminho();

        if ($metodo === 'GET') {
            if ($caminho === '/' || $caminho === '/index.php' || $caminho === '/matricula') {
                $this->controller->show();
                return;
            }

            if ($caminho === '/alunos') {
                $this->controller->index();
                return;
            }

            $this->notFound();
            return;
        }

        if ($metodo === 'POST') {
            if ($caminho === '/' || $caminho === '/matricula') {
                $this->controller->store($_POST);
                return;
            }

            $this->notFound();
            return;
        }

        $this->notFound();
    }

    /**
     * Retorna o caminho da URL sem query string e sem base do script
     *
     * @return string
     */
    private function getCaminho() {
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/');

        if ($base !== '' && $base !== '/' && strpos($uri, $base) === 0) {
            $uri = substr($uri, strlen($base));
        }

        $uri = '/' . trim($uri, '/');

        return $uri === '//' ? '/' : $uri;
    }

    /**
     * Retorna um erro 404 simples
     */
    private function notFound() {
        http_response_code(404);
        echo '<h1>404 - Página não encontrada</h1>';
        echo '<p>Verifique a URL e tente novamente.</p>';
        exit;
    }
}
?>

