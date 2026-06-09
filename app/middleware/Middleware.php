<?php
/**
 * Middleware de Validação e Sanitização
 * 
 * Responsabilidade: Validar e sanitizar entrada de dados ANTES
 * que cheguem ao Controller.
 * 
 * Usa filter_input para barrar tentativas de XSS e injection.
 */
class Middleware {
    
    /**
     * Valida e sanitiza os dados de entrada
     * 
     * @param array $dados Dados brutos do formulário
     * @return array Dados sanitizados
     * @throws Exception Se validação falhar
     */
    public static function validarEsanitizar($dados) {
        $erros = [];

        // Validar e sanitizar: NOME
        $nome = filter_var(
            $dados['nome'] ?? '',
            FILTER_SANITIZE_STRING,
            FILTER_FLAG_NO_ENCODE_QUOTES
        );
        
        if (empty($nome)) {
            $erros[] = "Nome é obrigatório.";
        }
        if (strlen($nome) > 150) {
            $erros[] = "Nome deve ter no máximo 150 caracteres.";
        }

        // Validar e sanitizar: IDADE
        $idade = filter_var(
            $dados['idade'] ?? '',
            FILTER_VALIDATE_INT,
            [
                "options" => [
                    "min_range" => 1,
                    "max_range" => 150
                ]
            ]
        );
        
        if ($idade === false) {
            $erros[] = "Idade deve ser um número válido entre 1 e 150.";
        }

        // Validar e sanitizar: CURSO
        $curso = filter_var(
            $dados['curso'] ?? '',
            FILTER_SANITIZE_STRING,
            FILTER_FLAG_NO_ENCODE_QUOTES
        );
        
        if (empty($curso)) {
            $erros[] = "Curso é obrigatório.";
        }

        // Se houver erros, retornar array com erros
        if (!empty($erros)) {
            return [
                'valido' => false,
                'erros' => $erros
            ];
        }

        // Se passou, retornar dados sanitizados
        return [
            'valido' => true,
            'dados' => [
                'nome' => $nome,
                'idade' => $idade,
                'curso' => $curso
            ]
        ];
    }

    /**
     * Middleware legado (compatibilidade)
     * Mantido para não quebrar código existente
     */
    public static function validar($dados) {
        $validacao = self::validarEsanitizar($dados);
        
        if (!$validacao['valido']) {
            $mensagens = implode("<br>", $validacao['erros']);
            die("<h2>Erro de Validação:</h2><p>$mensagens</p><a href='/'>Voltar</a>");
        }
    }
}
?>


