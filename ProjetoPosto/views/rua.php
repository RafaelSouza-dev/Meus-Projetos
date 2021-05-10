<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!--ARQUIVOS NECESSÁRIOS PARA O FUNCIONAMENTO DO DROPDOWN-->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/barraSuperior.js"></script>

    <link rel="stylesheet" href="../css/barraSuperior.css">
    <link rel="stylesheet" href="../css/paciente/rua.css">    
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>ESF</title>
</head>

<body>

    <header>
        <div class="logoTopo">
            <img src="../img/brasaoQueimados.png" alt="brasãoQueinados">
        </div>
        <h4>ESF Santo Expedito</h4> 

        <div class="navbarPrincipal">
            <ul>
                <li><a href="inicio.php"><strong>Início</strong></a></li>
                <li><a href="fechamento.php">Fechamento do mês</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownPerfil" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ACS Fulano
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!--<li><a class="dropdown-item" href="usuario.php">Perfil</a></li><br>-->
                        <li><a class="dropdown-item" href="#">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    
</body>
</html>