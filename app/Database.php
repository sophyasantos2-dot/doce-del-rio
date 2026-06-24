<?php
/**
 * Classe responsável por gerenciar conexão com o banco de dados.
 * Implementa o padrão Singleton para evitar múltiplas conexões.
 */
class Database {
    private static $instance = null;
    private $pdo = null;
    private $config = [];

    /**
     * Construtor privado (Singleton)
     */
    private function __construct() {
        $this->carregarConfiguracao();
        $this->conectar();
    }

    /**
     * Retorna a instância única da conexão
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Carrega configurações do arquivo config.ini
     */
    private function carregarConfiguracao() {
        $configFile = __DIR__ . '/../config.ini';
        
        if (!file_exists($configFile)) {
            throw new Exception("Arquivo config.ini não encontrado em " . $configFile);
        }

        $this->config = parse_ini_file($configFile, true);
        
        if (!$this->config) {
            throw new Exception("Erro ao ler config.ini");
        }
    }

    /**
     * Estabelece conexão com o banco de dados
     */
    private function conectar() {
        try {
            $driver = $this->config['database']['driver'] ?? 'sqlite';
            $path = $this->config['database']['path'] ?? 'database.sqlite';

            if ($driver === 'sqlite') {
                $projectRoot = realpath(__DIR__ . '/..');
                if ($projectRoot === false) {
                    throw new Exception("Não foi possível resolver o caminho do projeto.");
                }

                $databaseFile = $path;
                if (!preg_match('/^(?:[A-Za-z]:[\/\\\\]|\/)/', $databaseFile)) {
                    $databaseFile = $projectRoot . '/' . ltrim($path, '/\\');
                }

                $dsn = 'sqlite:' . $databaseFile;
            } else {
                throw new Exception("Driver não suportado: " . $driver);
            }

            $this->pdo = new PDO($dsn);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            throw new Exception("Erro ao conectar ao banco: " . $e->getMessage());
        }
    }

    /**
     * Retorna a instância do PDO
     */
    public function getConnection() {
        return $this->pdo;
    }

    /**
     * Impede clonagem da instância (Singleton)
     */
    private function __clone() {}

    /**
     * Impede desserialização da instância (Singleton)
     */
    public function __wakeup() {}
}
