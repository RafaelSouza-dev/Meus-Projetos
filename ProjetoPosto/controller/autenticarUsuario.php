<?php
session_start();
    try{
        
        $loginCorreto = "rafael";
        $senhaCorreta = "rafael";

        $loginDigitado = $_POST["usuario"];
        $senhaDigitada = $_POST["senha"];


        if($loginDigitado == $loginCorreto){

            if( $senhaDigitada == $senhaCorreta){
                $_SESSION["usuarioLogado"] = $loginDigitado;
                header("Location: http://localhost/ProjetoPosto/index.php");
            }else{
                unset($_SESSION);
                header("Location: http://localhost/ProjetoPosto/login.php?erro=login");
            }

        }else{
            unset($_SESSION);
            header("Location: http://localhost/ProjetoPosto/login.php?erro=login");
        }   
        

    }catch(Exception $e){
        echo $e->getMessage();
    }
    
?>
