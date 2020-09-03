<?php

Class Paciente{

    private $nomePaciente;
    private $nomeMaePaciente;
    private $registroGeralPaciente;
    private $cpfPaciente;
    private $enderecoPaciente;
    private $dataNascimentoPaciente;
    private $microAreaPaciente;

    public function __construct($nome,$nomeMae,$rg,$m_area){

        $this->nomePaciente = $nome;
        $this->nomeMaePaciente = $nomeMae;
        $this->registroGeralPaciente = $rg;
        $this->microAreaPaciente = $m_area;

    }
    public function getNome(){
        return $this->nomePaciente;
    }
    public function setNome($nome){
        $this->nomePaciente = $nome;
    }
    public function getNomeMae(){
        return $this->nomeMaePaciente;
    }
    public function setNomeMae($nomeMae){
        $this->nomeMaePaciente  = $nomeMae;
    }
    public function getRg(){
        return $this->registroGeralPaciente;
    }
    public function setRg($rg){
        $this->registroGeralPaciente = $rg;
    }
    public function getCpf(){
        return $this->cpfPaciente;
    }
    public function setCpf($cpf){
        $this->cpfPaciente = $cpf;
    }
    public function getEndereco(){
        return $this->enderecoPaciente;
    }
    public function setEndereco($end){
        $this->enderecoPaciente = $end;
    }
    public function getDataNascimento(){
        return $this->dataNascimentoPaciente;
    }
    public function setDataNascimento($nascimento){
        $this->dataNascimentoPaciente = $nascimento;
    }
    public function getMicroarea(){
        return $this->microAreaPaciente;
    }
    public function setMicroarea($m_area){
        $this->microAreaPaciente = $m_area;
    }
}
?>