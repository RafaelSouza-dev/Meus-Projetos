<?php

    include "../class/usuarioTeste.class.php";
    include "Banco.php";

    class PacienteDAO {

        /*private $conexao;

        public function __construct(){
            include "BancoPDO.php";
            $this->conexao = new BancoPDO();
        }*/
        
        public function cadastrar($usuario){
            
            
            $banco = new Banco();
            $con = $banco->conectar();

            $senha = $usuario->getSenha();
            $nome = $usuario->getNome();
            $nivel = $usuario->getNivel();

            $sql = "INSERT INTO usuarios (SENHA_USUARIO,NOME_USUARIO,ID,NIVEL) VALUES ($senha, '$nome', default , $nivel)";
            if (mysqli_query($con,$sql)){
                echo $nome." cadastrado com sucesso.";
            }else{
                echo "Erro ao cadastrar.";
                var_dump($con);
            }
            /*$bancoPDO = new BancoPDO();
            $senha = $usuario->getSenha();
            $nome = $usuario->getNome();
            $nivel = $usuario->getNivel();

            $sql = "INSERT INTO usuarios (SENHA_USUARIO,NOME_USUARIO,ID,NIVEL) VALUES ($senha,'$nome',default,$nivel)";           

            if($bancoPDO->query($sql)){
                echo $nome ." cadastrado com sucesso!";
            }else{
                echo" Erro ao cadastrar";
            }*/
            
        }

        public function listar(){

           $banco = new Banco();
           $con = $banco->conectar();
           
           
        }

        public function editar($usuario){


        }

        public function excluir($id){

            $banco = new Banco();
            $con = $banco->conectar();
        }

        public function pesquisarId($id){

            $banco = new Banco();
            $con = $banco->conectar();
        }

    }
?>