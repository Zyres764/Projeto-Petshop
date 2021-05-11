<?php
    class ConnectionDB extends PDO{
        private static $instance = null;

        public function __construct($dsn, $usuario, $senha) {
            parent::__construct($dsn, $usuario, $senha);
        }

        public static function getInstance() {
            if (!isset(self::$instance)) {
                try {

                    self::$instance = new ConnectionDB(
                        "mysql:dbname=petshop_php;host=localhost",
                        "root",
                        ""
                    );
                    echo "Conexão ao banco de dados efetuada com sucesso!";
                } catch (Exception $e) {
                    echo "Ocorreram erros ao tentar conectar au banco de dados!";
                    echo $e;
                    die();
                    exit();
                }
            }
            return self::$instance;
        
        
            
        }
    }
?>