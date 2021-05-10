<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/barraLateralMenu.js"></script>
    <script src="../js/covid.js"></script>
    <script src="../js/barraSuperior.js"></script>

    <link rel="stylesheet" href="../css/paciente/covid.css">
    <link rel="stylesheet" href="../css/paciente/barraLateralMenu.css">
    <link rel="stylesheet" href="../css/paciente/barraLateralPesquisarPaciente.css">
    <link rel="stylesheet" href="../css/barraSuperior.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
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
                        <li><a class="dropdown-item" href="usuario.php">Perfil</a></li><br>
                        <li><a class="dropdown-item" href="#">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <!--BARRA LATERAL MENU-->
    <div class="barraLateralMenu">

        <a class="btnGrupoLateralMenu btnExame" href="exameDeSangue.php"><strong>Exame de Sangue</strong></a>

        <a class="btnGrupoLateralMenu btnExame" href="bolsaFamilia.php"><strong>Bolsa Família</strong></a>
        
        <a class="btnGrupoLateralMenu btnEntregaPreventivo" href="preventivo.php"><strong>Preventivo</strong></a>
        
        <a class="btnGrupoLateralMenu btnNotificacao" href="notificacao.php"><strong>Notificações</strong></a>

    </div>  
    
    <!--      BARRA LATERAL DIREITTA DE PESQUISA E LISTAGEM DE PACIENTES  -->
    <div class="barraLateralPesquisarPaciente">
        <div class="pesquisaBarraLateralPesquisarPaciente">
            <div class="input-group col-11">
                <input type="text" class="form-control" placeholder="Filtrar pelo cpf"
                    aria-label="Recipient's username with two button addons">
                <button class="btn btn-outline-success listar" type="button" id="button-addon2">Ok</button>
            </div>
        </div>
    </div>
    <!--FIM BARRA LATERAL PESQUISAR PACIENTES -->
    <!--==========================================-->
    
    <!--   CONTAINER PRINCIPAL -->
    <div class="containerPrincipal">
        <fieldset class="border p-4">
            <legend class="legend"><img src="../img/covid.png" alt="">Covid-19</legend>
                <div class="input-group col-8">
                    <input type="text" class="form-control" placeholder="Digite o nome do paciente ou a data do exame" aria-label="Recipient's username with two button addons">
                    <button class="btn btn-outline-primary" type="button" id="button-addonPesquisarCovid">Pesquisar</button>
                    <button class="btn btn-outline-success" type="button" id="button-addonListarCovid">Listar</button>
                </div>
        </fieldset>  
    </div>

     <!-- INÍCIO DA DIV QUE MOSTRA A FICHA DE COVID -->
    <div class="mostrarPaciente">
        <fieldset class="border p-4">
        <legend class="legend"></legend>

        <button type="submit" class="btnFechar">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" 
            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 
            .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646
             5.354a.5.5 0 0 1 0-.708z"/></svg>
        </button>

        <div class="containerInfo">
            <div id="info1">
                <h5>Nome:<span> Cidadão tal</span></h5>
                <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                <h5>CPF: <span>011.222.333 - 44</span></h5>
                <h6>Mãe: <span>Fulana de tal</span></h6>
                <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
            </div>
            <div id="info2">
                <h6>Local de realização do teste: <span>Local Tal</span></h6>
                <h6>Resultado do teste: <span>Resultado</span></h6>
                <h6>Data que realizou o teste: <span>00/00/000</span></h6>
                <h6>Sintomas:<span> Febre ,dor de garganta ,tosse ,corisa </span></h6>
                <br>

                <label for=""><span>Editar</span></label>
                <button class="btnEditar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                    2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                    0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </button>

                <label for=""><span id="red">Excluir</span></label>
                <button class="btnExcluir">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                    0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </button>
            </div>
        </div>
        <button class="btnFichaCovid">Fazer a ficha de covid-19</button>
        <hr>   

            <form action="" method="POST">
                <div class="form-group">
                    <label>Descreva os sintomas do paciente</label>
                    <textarea class="form-control" placeholder="..."  rows="3"></textarea>
                    <br>
                </div> 

                <div class="boxContainer">
                    <div class="boxRealizouTeste">
                        <label><span>Realizou o teste?</span></label>           
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Positivo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault1">Negativo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault1">Não realizou</label>
                        </div>
                    </div>
                    <div class="boxViajou">
                        <label><span>Viajou nos últimos 14 dias?</span></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault1">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault5">
                            <label class="form-check-label" for="flexRadioDefault1">Não</label>
                        </div>
                    </div>
                </div>
                
                <div class="dataExameClass">
                    <label>Local onde realizou o exame:</label>
                    <input type="text" class="form-control col-md-4" id="dataExame">
                    <label>Data de realização do exame:</label>
                    <input type="text" class="form-control col-md-2" id="dataExame">
                    <label>Data do início dos sintomas:</label>
                    <input type="text" class="form-control col-md-2" >
                </div>             
                <button type="submit" class="btn btn-outline-primary">Salvar</button>
                <button type="submit" class="btn btn-outline-danger">Cancelar</button>
            </form>
        </fieldset>
        <br>
    </div>    
    <!-- FIM DA DIV QUE MOSTRA QUESTIONÁRIO DO PACIENTE -->

     <!-- FILTRR 
    <div class="filtrar">
        <fieldset class="border p-4">
            <legend class="legend"></legend>

            <button type="submit" class="btnFechar fecharFiltro">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" 
                fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 
                .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646
                5.354a.5.5 0 0 1 0-.708z"/></svg>
            </button>

            <label for="">Filtrar por CPF:</label>            
            <div class="input-group col-9">
                <input type="text" class="form-control col-md-4" placeholder="" maxlength="11" aria-label="Recipient's username" aria-describedby="button-addon2">            
                <button class="btn btn-outline-primary" type="button" id="button-addon2">Filtrar</button>
            </div> -->
        </fieldset>
    </div>
     
    <!--  LISTAR  -->
     <div class="listagem">
        <fieldset class="border p-4">
            <legend class="legend"></legend>
            <div class="containerInfo">
                <div id="info1">
                    <h5>Nome:<span> Cidadão tal</span></h5>
                    <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                    <h5>CPF: <span>011.222.333 - 44</span></h5>
                    <h6>Mãe: <span>Fulana de tal</span></h6>
                    <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
                </div>
                <div id="info2">
                    <h6>Resultado do teste: <span>Resultado</span></h6>
                    <h6>Data que realizou o teste: <span>00/00/000</span></h6>
                    <h6>Sintomas:<span> Febre ,dor de garganta ,tosse ,corisa </span></h6>
                    <br>

                    <label for=""><span>Editar</span></label>
                    <button class="btnEditar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                        2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                        0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </button>

                    <label for=""><span id="red">Excluir</span></label>
                    <button class="btnExcluir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                        0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <hr>
        </fieldset>
    </div>
</body>
</html>