<?php
/**
 * Exceção customizada para violações de regras de negócio
 * 
 * Diferencia erros de regra de negócio de outros erros da aplicação
 */
class BusinessRuleException extends Exception {
    private $httpCode = 422; // Unprocessable Entity

    public function __construct($message = "", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Retorna código HTTP apropriado para a exceção
     */
    public function getHttpCode() {
        return $this->httpCode;
    }

    /**
     * Define código HTTP da exceção
     */
    public function setHttpCode($code) {
        $this->httpCode = $code;
        return $this;
    }
}
