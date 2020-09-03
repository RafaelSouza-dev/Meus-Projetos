<?php


try{
    
    //data source name
    $dsn = "mysql:host=localhost;dbname=clinica_medica";

    //PHP data object
    $conexao = new PDO($dsn ,"root","") or die ("Problemas na conexão");

    $stmt = $conexao->prepare("SELECT FROM pacientes WHERE PRONTUARIO = 224");


}catch(Exception $e){
    echo $e->getMessage();
}

?>





