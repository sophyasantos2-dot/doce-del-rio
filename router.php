<?php
require_once 'middleware.php';
require_once 'controller.php';

class Router {
    public function direcionar() {
        $metodo = $_SERVER['REQUEST_METHOD'];

        if ($metodo === 'GET') {
            // Se o usuário só acessou a página, exibe o formulário
            require 'view.php';
        } elseif ($metodo === 'POST') {
            // Se o usuário clicou em enviar, o Middleware atua primeiro
            Middleware::validar($_POST);
            
            // Se o Middleware não bloqueou (die), chama o Controller
            $controller = new MatriculaController();
            $controller->processarMatricula($_POST);
        }
    }
}
?>

