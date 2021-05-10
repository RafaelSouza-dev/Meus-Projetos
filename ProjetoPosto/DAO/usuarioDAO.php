<?php
include_once "Banco.php";
include_once "../class/usuario.class.php";
    class UsuarioDAO{

        public function cadastrarUsuario($usuario){

            $banco = new Banco();
            $con = $banco->conectar();

            $codigo = $usuario->getCodigo();
            $nome = $usuario->getUsuario();
            $senha = $usuario->getSenha();
            $nivel = $usuario->getNivel();

            $sql = "INSERT INTO usuario (id,nome,senha,nivel) VALUES($codigo,$nome,$senha,$nivel)";
            if(mysqli_query($con,$sql)){
                echo $nome. " cadastrado(a) com sucesso!";
            }else{
                echo "Erro ao cadastrar.";
            }
        }

        public function Excluir($usuario){

            $banco = new Banco();
            $con = $banco->conectar();

            $codigo = $usuario->getCodigo();
            $nome = $usuario->getUsuario();

            $sql= "DELETE usuario WHERE id = ";
            if(mysqli_query($con,$sql)){
                echo $nome. " excluído com sucesso!";
            }else{
                echo "Erro na exclusão. Usuário(a)" .$nome." não excluído!";
            }
        }
    }
?>