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
    <link rel="stylesheet" href="../css/usuario/usuario.css">    
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

    <div class="containerPrincipal">
        <div id="dadosPerfil">
            <h4>Agente Comunitário de Saúde <span>Rafael Souza</span></h4>
            <label for=""><strong>Data de Admissão :</strong></label><br>
            <label for=""><strong>Matrícula :</strong></label><br>
            <label for=""><strong>Microarea :</strong></label>
                <img id="fotoPerfil" src="../img/brasaoQueimados.png" alt="">
        </div>

        <div class="dadosAcs">
            <label for=""><strong>Famílias :</strong></label><br>
            <label for=""><strong>Pacientes :</strong></label><br>
            <label for=""><strong>Ruas :</strong></label><br>
            <label for=""><strong>Hipertensos :</strong></label><br>
            <label for=""><strong>Acamados :</strong></label><br>
            <label for=""><strong>domiciliados :</strong></label><br>
            <label for=""><strong>Gestantes :</strong></label><br>
            <label for=""><strong>Saúde Mental :</strong></label>
        </div>
    </div>
    <!--      BARRA LATERAL DIREITTA DE PESQUISA E LISTAGEM DE PACIENTES  
    <div class="barraLateralPesquisarPaciente">
        <div class="pesquisaBarraLateralPesquisarPaciente">
            <div class="input-group col-11">
                <input type="text" class="form-control" placeholder="Digite o nome do paciente"
                    aria-label="Recipient's username with two button addons">
                <button class="btn btn-outline-success listar" type="button" id="button-addon2">Ok</button>
            </div>
        </div>
    </div>
        FIM BARRA LATERAL PESQUISAR PACIENTES -->
    <!--==========================================-->


    <!--BARRA LATERAL MENU
    <div class="barraLateralMenu">
        <label for=""></label>
        <button class="btnGrupoLateralMenu novoPaciente"><strong>Novo Usuário</strong></button>
        <div class="divCadastrar">
            <button class="btnGrupoLateralMenu cancelarCadastro"><span class="vermelho">Cancelar</span></button>
        </div>

        <button class="btnGrupoLateralMenu btnMeusPacientes"><strong>Meus Pacientes</strong></button>
    </div>
    FIM BARRA LATERAL MENU-->
    <!--==========================================-->

</body>
</html>    
