<?php

    class UsuarioTeste{

        private $senha;
        private $nome;
        private $id;
        private $nivel;

        public function __construct()
        {
            $this->senha = -1;
            $this->nome = "sem nome";
            $this->id = -1;
            $this->nivel = "sem nivel";
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($s){
            $this->senha = $s;
        }

        public function getNivel(){
            return $this->nivel;
        }

        public function setNIvel($ni){
            $this->nivel = $ni;
        }
        public function getId(){
            return $this->id;
        }
    }
?>