<?php
/**
 * Helpers e funções utilitárias
 */

/**
 * Obtém valor de configuração do config.ini
 */
function config($key, $default = null) {
    static $config = null;
    
    if ($config === null) {
        $config = parse_ini_file(__DIR__ . '/../config.ini', true);
    }
    
    $keys = explode('.', $key);
    $value = $config;
    
    foreach ($keys as $k) {
        if (is_array($value) && isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $default;
        }
    }
    
    return $value;
}

/**
 * Obtém a URL base da aplicação
 */
function baseUrl($path = '') {
    $base = '//' . $_SERVER['HTTP_HOST'];
    return $base . ($path ? '/' . ltrim($path, '/') : '');
}

/**
 * Redireciona para uma URL
 */
function redirect($url) {
    header('Location: ' . baseUrl($url));
    exit;
}

/**
 * Limpa entrada de dados
 */
function clean($data) {
    if (is_array($data)) {
        return array_map('clean', $data);
    }
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/**
 * Dumpa variável com die (debug)
 */
function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

/**
 * Dumpa variável sem die (debug)
 */
function dump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

