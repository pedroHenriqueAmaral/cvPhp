<?php
    require_once 'config.php';

    class Conexao {
        private static $instance;
        private static $msg;

        // método para executar instruções SQL
        public static function executar_sql($sql_code) {
            try {
                $mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                
                if($mysql->connect_errono) {
                    echo 'Falha na conexão com bano de dados!';
                } else {
                    $sql_query = $mysql->query($sql_code);
                }
                return $sql_query;
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        // Método para testar a conexão com o banco de dados
        public static function testar_banco() {
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if (mysqli_connect_errno()){
                $msg = "FALHA DE CONEXÃO COM O BANCO DE DADOS:" . mysqli_connect_errno();
            }
            else {
                $msg = "conexão do banco de dados realizada com sucesso";
            }
            return $msg;
        }
    }
?>