<?php 
    class Contato{
        private $id;
        private $nome;
        private $email;
        private $telefone;

        public function __construct(){
        }

        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this-> id;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;

            return $this;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;

            return $this;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;

            return $this;
        }
    }
?>