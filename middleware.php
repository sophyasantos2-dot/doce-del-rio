<?php
class Middleware {
    public static function validar($dados) {
        // Verifica se os campos estão vazios
        if (empty($dados['nome']) || empty($dados['idade']) || empty($dados['curso'])) {
            die("<h2>Erro: Todos os campos devem ser preenchidos.</h2><a href='/'>Voltar</a>");
        }
        
        // Verifica se a idade é um número
        if (!is_numeric($dados['idade'])) {
            die("<h2>Erro: A idade deve ser um número válido.</h2><a href='/'>Voltar</a>");
        }
    }
}
?>


