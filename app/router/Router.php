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
        $metodo = $_SERVER['REQUEST_METHOD'];

        if ($metodo === 'GET') {
            $this->controller->show();
        } elseif ($metodo === 'POST') {
            $this->controller->store($_POST);
        } else {
            $this->controller->show();
        }
    }
}
?>

