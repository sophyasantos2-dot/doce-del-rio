<?php
// Exibe erros na tela (ajuda muito durante o desenvolvimento)
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'router.php';

$router = new Router();
$router->direcionar();
?>
