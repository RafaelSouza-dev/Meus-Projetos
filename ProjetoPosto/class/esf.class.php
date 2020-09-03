<?php

    Class Esf{

        private $nomeEsf;

        public function __construct($nome){

            $this->nomeEsf = $nome;
        }

        public function getNome(){

            return $this->nomeEsf;
        }
        public function setNome($nome){

            $this->nomeEsf = $nome;
        }
    }
?>