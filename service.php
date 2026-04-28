<?php
class MatriculaService {
    public function processarRegras($dados) {
        // Regra de exemplo: Idade mínima de 16 anos
        if ($dados['idade'] < 16) {
            // Lança uma exceção se a regra falhar
            throw new Exception("O aluno deve ter pelo menos 16 anos para este curso.");
        }
        
        // Se passou em todas as regras, retorna os dados aprovados
        return $dados;
    }
}
?>
