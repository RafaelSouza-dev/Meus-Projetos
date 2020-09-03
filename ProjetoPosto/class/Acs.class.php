<?php

include "usuario.class.php";
Class Acs extends Usuario{

    private $microArea;
    private $codigo;

    public function __construct($codigo,$m_area) {
        
        $this ->codigo = $codigo;
        $this ->microArea = $m_area;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($cdg){
        $this->codigo = $cdg;
    }
    public function getMicroArea(){
        return $this->microArea;
    }
    public function setMicroArea($m_area){
        $this->microArea = $m_area;
    }
    public function addPaciente($p){

    }
    public function removePaciente($p){

    }
    
}

?>