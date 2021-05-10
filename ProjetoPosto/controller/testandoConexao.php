<?php

    include 'DAO/Banco.php';

    $banco = new Banco();
    $con = $banco->conectar();

    $sql = "SELECT * FROM pacientes";

?>