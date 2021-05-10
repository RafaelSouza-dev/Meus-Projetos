<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/login.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script><!--ARQUIVOS NECESSÁRIOS PARA O FUNCIONAMENTO DO DROPDOWN-->
    <script src="../js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    

    <title>Document</title>
</head>
<body>
    <div class="backGround">
        <div class="parteSuperior">
            <h1>Estratégia Saúde da Família <span class="verde">Santo Expedito</span></h1>                                
            <a href="login.php" class="btn btn-outline-success" data-toggle="modal" data-target="#modalLogin">Entrar</a>                     
        </div>
    </div>
    <!--  INÍCIO DO MODAL LOGIN  -->
    <div class="modal" id="modalLogin" tabindex="-1">
        <div class="login">
            <!--<img  id="imagemBrasao" src="../img/brasaoQueimados.png" alt="brasaoQueimados">-->
            <h4>Login</h4>
            <form method="post" action="controle/conexaoBanco.php">
                <label id="user">Usuário</label>
                <input  type="text" name="usuario" placeholder="Insira o usuário" required>
                <label id="pswd">Senha</label>
                <input  type="password" name="senha" placeholder="Insira sua senha" required ><br><br>
                <button class="btn btn-outline-success" type="submit">Entrar</button>
            </form>
        </div>             
    </div>
</body>
</html>