<?php
/**
 * Configurações centrais da aplicação
 */

// Banco de dados SQLite isolado em app/migration/
if (!defined('DB_PATH')) {
    define('DB_PATH', __DIR__ . '/app/migration/database.sqlite');
}

// Configurações de ambiente
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Carregar helpers
require_once __DIR__ . '/app/helpers.php';

