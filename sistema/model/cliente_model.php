<?php
    include_once '../conexao/conexao.php';

    class Cliente {
        # Propriedades da classe
        private $id;
        private $nome;
        private $email;
        private $endereco;
        private $bairro;
        private $numero;

        # Funções GET / SET
        public function getId() {
            return $this->id;
        }
        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getEmail() {
            return $this->email;
        }
        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEndereco() {
            return $this->endereco;
        }
        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function getBairro() {
            return $this->bairro;
        }
        public function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        public function getNumero() {
            return $this->numero;
        }
        public function setNumero($numero) {
            $this->numero = $numero;
        }

        # Métodos
        public function read() {
            $sql_code = 'SELECT * 
                         FROM cliente 
                         ORDER BY nome';

            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }

        public function create() {
            $sql_code = 'INSERT INTO cliente
            (nome, email, endereco, bairro, numero)
            VALUES
            (
            "' .self::getNome().'",
            "' .self::getEmail().'",
            "' .self::getEndereco().'",
            "' .self::getBairro().'",
            "' .self::getNumero().'" 
            )';

            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }

        public function update() {
            $sql_code = 'UPDATE cliente SET
            nome = "' .self::getNome(). '",
            email = "' .self::getNome(). '",
            endereco = "' .self::getNome(). '",
            bairro = "' .self::getNome(). '",
            numero = "' .self::getNome(). '",
            WHERE id = ' . self::getId();

            echo $sql_code;

            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }

        public function delete() {
            $sql_code = 'DELETE FROM cliente 
            WHERE id = ' .self::getId();

            echo $sql_code;

            $sql_query = Conexao::executar_sql($sql_code);
            return $sql_query;
        }
    }
?>