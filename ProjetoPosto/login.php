<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="login">
        <img  id="imagemBrasao" src="img/brasaoQueimados.png" alt="brasaoQueimados">
        <form method="post" action="controle/conexaoBanco.php">
            <label id="user">Usuário</label>
            <input  type="text" name="usuario" placeholder="Insira o usuário" required>
            <label id="pswd">Senha</label>
            <input  type="password" name="senha" placeholder="Insira sua senha" required ><br><br>
            <button id="btn" type="submit">Entrar</button>
        </form>
        <?php
        /*AUTENTICANDO LOGIN*/
            try{    
                if(isset($_GET['erro'])){
                    if($_GET['erro'] == "login"){
                    echo '<div class="mensagem"><strong>Login ou senha incorretos!</strong></div>';
                    }
                }
            }catch(Exception $e){
                echo $e->getMessage();
            }    
        ?>
    </div>  
    
</body>
</html>