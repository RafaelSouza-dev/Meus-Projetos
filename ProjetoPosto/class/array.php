<?php
    include "teste.class.php";
    try{

        $teste = array(new ContaItau("rafael","rafael","rafael"));
        var_dump($teste);
        if(!empty($teste)){  //empty é vazio,como em Java.
            throw new Exception("cheio");
        }else{
            throw new Exception("vazio");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>