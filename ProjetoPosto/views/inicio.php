<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!--ARQUIVOS NECESSÁRIOS PARA O FUNCIONAMENTO DO DROPDOWN-->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/barraLateralMenu.js"></script>
    <script src="../js/conteudoPosFormulario.js"></script>
    <script src="../js/inicio.js"></script>
    <script src="../js/paciente.js"></script>
    <script src="../js/barraSuperior.js"></script>

    <link rel="stylesheet" href="../css/paciente/formularioCadastroPaciente.css">
    <link rel="stylesheet" href="../css/paciente/mostrarPaciente.css">
    <link rel="stylesheet" href="../css/paciente/barraLateralMenu.css">
    <link rel="stylesheet" href="../css/paciente/barraLateralPesquisarPaciente.css">
    <link rel="stylesheet" href="../css/barraSuperior.css">
    <link rel="stylesheet" href="../css/paciente/conteudoPosFormulario.css">
    <link rel="stylesheet" href="../css/paciente/inicio.css">
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
                        <li><a class="dropdown-item" href="usuario.php">Perfil</a></li><br>
                        <li><a class="dropdown-item" href="#">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <!--      BARRA LATERAL DIREITTA DE PESQUISA E LISTAGEM DE PACIENTES  -->
    <div class="barraLateralPesquisarPaciente">
        <div class="pesquisaBarraLateralPesquisarPaciente">
            <div class="input-group col-11">
                <input type="text" class="form-control" placeholder="Digite o nome do paciente"
                    aria-label="Recipient's username with two button addons">
                <button class="btn btn-outline-success listar" type="button" id="button-addon2">Ok</button>
            </div>
        </div>
    </div>
    <!--FIM BARRA LATERAL PESQUISAR PACIENTES -->
    <!--==========================================-->

    <!-- IMAGEM DO PLPANO DE FUNDO  -->
    <div class="imagemPlanoDeFundo"></div>
    <!--==========================================-->

    <!--BARRA LATERAL MENU-->
    <div class="barraLateralMenu">
        <label for=""></label>
        <button class="btnGrupoLateralMenu novoPaciente"><strong>Novo Paciente</strong></button>
        <div class="divCadastrar">
            <button class="btnGrupoLateralMenu cancelarCadastro"><span class="vermelho">Cancelar</span></button>
        </div>

        <button class="btnGrupoLateralMenu btnMeusPacientes"><strong>Meus Pacientes</strong></button>

        <div class="divPaciente">
            <button class="btnGrupoLateralMenu subBtnPaciente hipertensos">Hipertensos</button>
            <button class="btnGrupoLateralMenu subBtnPaciente diabeticos">Diabéticos</button>
            <button class="btnGrupoLateralMenu subBtnPaciente acamados">Acamados</button>
            <button class="btnGrupoLateralMenu subBtnPaciente domiciliados">Domiciliados</button>
            <button class="btnGrupoLateralMenu subBtnPaciente gestantes">Gestantes</button>
            <button class="btnGrupoLateralMenu subBtnPaciente listarMeusPacientes">Listar Todos</button>
        </div>

        <button class="btnGrupoLateralMenu btnMinhasRuas"><strong>Minhas Ruas</strong></button>

        <a class="btnGrupoLateralMenu btnExame" href="exameDeSangue.php"><strong>Exame de Sangue</strong></a>

        <a class="btnGrupoLateralMenu btnBolsaFamilia" href="bolsaFamilia.php"><strong>Bolsa Família</strong></a>

        <a class="btnGrupoLateralMenu btnEntregaPreventivo" href="preventivo.php"><strong>Preventivo</strong></a>

        <a class="btnGrupoLateralMenu btnNotificacao" href="notificacao.php"><strong>Notificações</strong></a>

        <a class="btnGrupoLateralMenu btnCovid19" href="covid19.php"><strong><span
                    class="vermelho">COVID-19</span></strong></a>
    </div>
    <!--FIM BARRA LATERAL MENU-->
    <!--==========================================-->

    <!-- INÍCIO DA DIV QUE MOSTRA CADA PACIENTE 
    <div class="mostrarPaciente">
        <fieldset class="border p-4">
            <legend class="legend"></legend>
            <div class="info">
                <div class="infoPart1">
                    <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                    <h5>Nome:<span> Cicrano </span></h5>
                    <h6>CPF: <span>011.222.333 - 44</span></h6>
                </div>

                <div class="infoPart2">
                    <h6>Mãe: <span>Fulana de tal</span></h6>
                    <h6>Pai: <span>Fulano de tal</span></h6>
                    <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
                </div>
            </div>
            <br>

            <label for=""><span>Editar</span></label>
            <button class="btnEditar">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                    2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                    0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </button>

            <label for=""><span id="red">Excluir</span></label>
            <button class="btnExcluir">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                    0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>
    </div>
    </fieldset>
    </div>-->
    <!-- FIM DA DIV QUE MOSTRA CADA PACIENTE -->

    <!-- INÍCIO DO FORM-->
    <form action="" class="formulario" method="POST">
        <fieldset class="border p-4">
            <legend class="legend">Dados do Paciente</legend>
            <div class="form-row inputSus">
                <div class="form-group col-md-4">
                    <label>SUS:</label>
                    <input type="text" class="form-control" id="inputSus" maxlength="15" required>
                </div>
            </div> <br>

            <div class="form-row">
                <div class="form-group inputNome">
                    <label>Nome: <span class="azul">*</span></label>
                    <input type="text" name="nome" class="form-control" required>
                    <?php 
                            if(strlen("nome") < 3)
                                echo "O nome precisa ter mais que 3 caracteres!"; //TESTANDO UMA PROTEÇÃO
                        ?>
                </div>
                <div class="form-group col-md-2 inputDataDeNascimento">
                    <label>Nascimento: <span class="azul">*</span></label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-2 selectSexo">
                    <label>Sexo: <span class="azul">*</span></label>
                    <select class="form-control" required>
                        <option selected>Selecione</option>
                        <option value="valor1">Masculino</option>
                        <option value="valor2">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>RG: <span class="azul">*</span></label>
                    <input type="text" class="form-control inputRg" maxlength="9" required>
                </div>
                <div class="form-group col-md-3">
                    <label>CPF: <span class="azul">*</span></label>
                    <input type="text" class="form-control inputCpf" maxlength="11" required>
                </div>

                <!--PARTE DO EXAME DE SANGUE
                <div class="form-group col-md-3 inputExame selectExame">
                    <label class="inputTipoExame">Tipo do exame</label>
                    <select class="form-control inputSelectTipoExame">
                        <option selected>Selecione</option>
                        <option value="valor1">Sangue,Fezes e Urina</option>
                        <option value="valor2">Sangue e Fezes</option>
                        <option value="valor3">Sangue e Urina</option>
                        <option value="valor4">Fezes e Urina</option>
                        <option value="valor5">Somente Sangue</option>
                        <option value="valor6">Somente Fezes</option>
                        <option value="valor7">Somente Urina</option>
                    </select>
                </div>
                <div class="form-group col-md-2 inputExame dataExame">
                    <label>Data do Exame</label>
                    <input type="text" class="form-control">
                </div>               
                <button type="submit" class="botoesSalvarForm btnSalvarExame  btn btn-outline-primary">Salvar</button>
                <button type="submit" class="botoesSalvarForm btnSalvarBolsaFamilia  btn btn-outline-primary">Salvar</button>
                <button type="submit" class="botoesSalvarForm btnSalvarNotificacao  btn btn-outline-primary">Salvar</button>
                    FIM DA PARTE DO EXAME DE SANGUE
                =============================================-->

                <!--PARTE DO PREVENTIVO
                <div class="form-group col-md-2 inputPreventivo dataColetaPreventivo">
                    <label>Data da Coleta</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-2 inputPreventivo dataEntregaPreventivo">
                    <label>Data da Entrega</label>
                    <input type="text" class="form-control">
                </div>
                <button type="submit" class="botoesSalvarForm btnSalvarPreventivo  btn btn-outline-primary">Salvar</button>
            </div>                
                FIM DA PARTE DO PREVENTIVO
            ===============================================-->

                <div class="form-group inputNomeMae">
                    <label>Nome da Mãe: <span class="azul">*</span></label>
                    <input type="text" class="Nomes form-control" required>
                </div>
                <div class="form-group inputNomePai">
                    <label>Nome do pai: <span class="azul">*</span></label>
                    <input type="text" class="Nomes form-control" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Rua: <span class="azul">*</span></label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3 inputNomePai">
                        <label>Complemento</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-1 inputNumero">
                        <label for="inputZip">Número</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Microárea: <span class="azul">*</span></label>
                        <select class="form-control inputMicroArea" required>
                            <option selected>Selecione</option>
                            <option value="valor1">Microárea01</option>
                            <option value="valor2">Microárea02</option>
                            <option value="valor3">Microárea03</option>
                            <option value="valor4">Microárea04</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Outras Informações do paciente</label>
                        <textarea class="form-control" placeholder="..." rows="3"></textarea>
                    </div>
                </div>
        </fieldset>
        <fieldset class="border p-4">
            <legend class="legend">Comorbidades</legend>
        </fieldset>
        <fieldset class="border p-4">
            <legend class="legend">Contatos</legend>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Celular:<span class="azul">*</span></label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label>Residencial</label>
                    <input type="text" class="form-control inputCResidencial">
                </div>
        </fieldset>
        <button type="submit" class="salvar btnGrupo btn btn-outline-primary">Salvar</button>
        <button type="submit" class="cancelar btnGrupo btn btn-outline-danger">Cancelar</button>
    </form>
    <!--FIM DO FORMULÁRIO-->
    <!--==========================================-->

    <!-- DIVS MEUS PACIENTES: HIPERTENSOS ,DIABÉTICOS...-->
    <div class="conteudoPosFormulario containerHipertensos">
        <fieldset class="border p-4">
            <legend class="legend">Hipertensos</legend>
            <div class="info">
                <div class="infoPart1">
                    <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                    <h5>Nome:<span> Cicrano </span></h5>
                    <h6>CPF: <span>011.222.333 - 44</span></h6>
                </div>

                <div class="infoPart2">
                    <h6>Mãe: <span>Fulana de tal</span></h6>
                    <h6>Pai: <span>Fulano de tal</span></h6>
                    <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
                </div>
            </div>
            <br>
            <label for=""><span>Editar</span></label>
            <button class="btnEditar">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                    2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                    0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </button>

            <label for=""><span id="red">Excluir</span></label>
            <button class="btnExcluir">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                    0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>
            <br>
        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerDiabeticos">
        <fieldset class="border p-4">
            <legend class="legend">Diabéticos</legend>
            <div class="info">
                <div class="infoPart1">
                    <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                    <h5>Nome:<span> Cicrano </span></h5>
                    <h6>CPF: <span>011.222.333 - 44</span></h6>
                </div>

                <div class="infoPart2">
                    <h6>Mãe: <span>Fulana de tal</span></h6>
                    <h6>Pai: <span>Fulano de tal</span></h6>
                    <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
                </div>
            </div>
            <br>
            <label for=""><span>Editar</span></label>
            <button class="btnEditar">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                    2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                    0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </button>

            <label for=""><span id="red">Excluir</span></label>
            <button class="btnExcluir">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                    0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>
            <br>
        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerAcamados">
        <fieldset class="border p-4">
            <legend class="legend">Acamados</legend>
            <div class="info">
                <div class="infoPart1">
                    <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                    <h5>Nome:<span> Cicrano </span></h5>
                    <h6>CPF: <span>011.222.333 - 44</span></h6>
                </div>

                <div class="infoPart2">
                    <h6>Mãe: <span>Fulana de tal</span></h6>
                    <h6>Pai: <span>Fulano de tal</span></h6>
                    <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
                </div>
            </div>
            <br>
            <label for=""><span>Editar</span></label>
            <button class="btnEditar">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                    2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                    0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </button>

            <label for=""><span id="red">Excluir</span></label>
            <button class="btnExcluir">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                    0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>
            <br>
        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerDomiciliados">
        <fieldset class="border p-4">
            <legend class="legend">Domiciliados</legend>
            <div class="info">
                <div class="infoPart1">
                    <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                    <h5>Nome:<span> Cicrano </span></h5>
                    <h6>CPF: <span>011.222.333 - 44</span></h6>
                </div>

                <div class="infoPart2">
                    <h6>Mãe: <span>Fulana de tal</span></h6>
                    <h6>Pai: <span>Fulano de tal</span></h6>
                    <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
                </div>
            </div>
            <br>
            <label for=""><span>Editar</span></label>
            <button class="btnEditar">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                    2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                    0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </button>

            <label for=""><span id="red">Excluir</span></label>
            <button class="btnExcluir">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                    0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>
            <br>
        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerGestantes">
        <fieldset class="border p-4">
            <legend class="legend">Gestantes</legend>
            <div class="info">
                <div class="infoPart1">
                    <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                    <h5>Nome:<span> Cicrano </span></h5>
                    <h6>CPF: <span>011.222.333 - 44</span></h6>
                </div>

                <div class="infoPart2">
                    <h6>Mãe: <span>Fulana de tal</span></h6>
                    <h6>Pai: <span>Fulano de tal</span></h6>
                    <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
                </div>
            </div>
            <br>
            <label for=""><span>Editar</span></label>
            <button class="btnEditar">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                    2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                    0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </button>

            <label for=""><span id="red">Excluir</span></label>
            <button class="btnExcluir">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                    0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>
            <br>
        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerListar">
        <fieldset class="border p-4">
            <legend class="legend">Listar Todos</legend>
            <div class="info">
                <div class="infoPart1">
                    <h5>SUS:<span> 898.0001.0002.0003</span></h5>
                    <h5>Nome:<span> Cicrano </span></h5>
                    <h6>CPF: <span>011.222.333 - 44</span></h6>
                </div>

                <div class="infoPart2">
                    <h6>Mãe: <span>Fulana de tal</span></h6>
                    <h6>Pai: <span>Fulano de tal</span></h6>
                    <h6>Endereço: Rua: <span>Tal</span> Nº <span>001</span> Bairro: <span>Tal</span></h6>
                </div>
            </div>
            <br>
            <label for=""><span>Editar</span></label>
            <button class="btnEditar">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75
                    2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 
                    0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </button>

            <label for=""><span id="red">Excluir</span></label>
            <button class="btnExcluir">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1
                    0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>
            <br>
        </fieldset>
    </div>

</body>

</html>