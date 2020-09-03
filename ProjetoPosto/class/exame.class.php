<?php
require_once("Paciente.class.php");
Class Exame{

    private $codigoExame;
    private $tipoDoExame;
    private $data =  date('Y-m-d H:i');/*COLOCAR UM DATE PARA PEGAR SEMPRE A DATA DO COMPUTADOR*/
    /*private $responsavel Paciente;CHAMAR A CLASSE RESPONSÁVEL AQUI*/

    public function __construct($codigo,$tipo,$data){

        $this->codigoExame = $codigo;
        $this->tipoDoExame = $tipo;
        $this->data = $data;
        /*$this->paciente = Paciente;
        $this->responsavel = Responsavel;*/
    }
    public function getCodigo(){

        return $this->codigoExame;
    }
    public function setCodigo($codigo){

        $this->codigoExame = $codigo;
    }
    public function getTipo(){

        return $this->tipoDoExame;
    }
    public function setTipo($tipo){

        $this->tipoDoExame = $tipo;
    }
    public function getData(){

        return $this->data;
    }
} 
?>