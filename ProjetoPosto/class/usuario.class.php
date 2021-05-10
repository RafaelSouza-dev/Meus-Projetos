<?php

Class Usuario{

    private $nome;
    private $matricula;
    private $nivelUsuario;
    private $senhaUsuario;
    private $RG;
    private $CPF;
    private $dataNascimento;
    private $dataAdmissao;

    public function __construct($nome,$matricula,$nivel,$senha,$rg,$cpf,$nascimento,$admissao){

        $this ->nome = $nome;
        $this->matricula = $matricula;
        $this ->nivelUsuario = $nivel;
        $this ->senhaUsuario  = $senha;
        $this ->RG  = $rg;
        $this ->CPF  = $cpf;
        $this ->dataNascimento  = $nascimento;
        $this->daraAdmissao = $admissao;

    }
    
    public function getNome(){

        return $this->nome;
    }
    public function setNome($n){

        $this->nome = $n;
    }
    public function getNivel(){

        return $this->nivelUsuario;
    }
    public function setNivel($n){

        $this->nivelUsuario = $n;
    }
    public function getSenha(){

        return $this->senhaUsuario;
    }
    public function setSenha($s){

        $this->senhaUsuario = $s;
    }
    public function getRG(){
        return $this->RG;
    }
    public function setRG($rg){
        $this->rRG = $rg;
    }
    public function getCPF(){
        return $this->CPF;
    }
    public function setCPF($cpf){
        $this->CPF = $cpf;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }
    public function setDataNascimento($dn){
        $this->dataNascimento = $dn;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($m){
        $this->matricula = $m;
    }
    public function getAdmissao(){
        return $this->dataAdmissao;
    }
    public function setAdmissao($admissao){
        $this->dataAdmissao = $admissao;
    }

    public function addUsuario(){

    }
    public function removeUsuario(){

    }
    public function alterarNomeUsuario(){

    }
    public function alterarSenha(){

    }
   
}

?>