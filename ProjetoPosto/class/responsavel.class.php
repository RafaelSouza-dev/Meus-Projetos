<?php

    Class Responsavel{

        private $codigoResponsavel;
        private $nomeResponsavel;
        private $matriculaResponsavel;
        private $rgResponsavel;

        public function __construct($codigo,$nome,$matricula,$rg){

            $this->codigoResponsavel = $codigo;
            $this->nomeResponsavel = $nome;
            $this->matriculaResponsavel = $matricula;
            $this->rgResponsavel = $rg;
        }

        public function getCodigo(){

            return $this->codigoResponsavel;
        }
        public function setCodigo($codigo){

            $this->codigoResponsavel = $codigo;
        }
        public function getNome(){

            return $this->nomeResponsavel;
        }
        public function setNome($nome){

            $this->nomeResponsavel = $nome;
        }
        public function getMatricula(){

            return $this->matriculaResponsavel;
        }
        public function setMatricula($matricula){

            $this->matriculaResponsavel = $matricula;
        }
        public function getRg(){

            return $this->rgResponsavel;
        }
        public function setRg($rg){

            $this->rgResponsavel = $rg;
        }

    }
?>