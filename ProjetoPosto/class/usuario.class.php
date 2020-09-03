    <?php
include "Acs.class.php";

Class Usuario{

    private $nome;
    private $matricula;
    private $login;
    private $nivelUsuario;
    private $senhaUsuario;
    private $registroGeral;
    private $cadastroPF;
    private $dataNascimento;

    public function __construct($nome,$login,$matricula,$nivel,$senha,$rg,$cpf,$nascimento){

        $this ->nome = $nome;
        $this->login = $login;
        $this->matricula = $matricula;
        $this ->nivelUsuario = $nivel;
        $this ->senhaUsuario  = $senha;
        $this ->registroGeral  = $rg;
        $this ->cadastroPF  = $cpf;
        $this ->dataNascimento  = $nascimento;

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
        return $this->registroGeral;
    }
    public function setRG($rg){
        $this->registroGeral = $rg;
    }
    public function getCPF(){
        return $this->cadastroPF;
    }
    public function setCPF($cpf){
        $this->cadastroPF = $cpf;
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
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($l){
        $this->login = $l;
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