<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.4.1.min.js"></script><!--ARQUIVOS NECESSÁRIOS PARA O FUNCIONAMENTO DO DROPDOWN-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/barraLateralDireita.js"></script>
    <script src="js/conteudoPosFormulario.js"></script>
    <script src="js/formularioPaciente.js"></script>
    <link rel="stylesheet" href="css/formularioPaciente.css">
    <link rel="stylesheet" href="css/barraLateralDireita.css">
    <link rel="stylesheet" href="css/barraLateralEsquerda.css">
    <link rel="stylesheet" href="css/barraSuperior.css">
    <link rel="stylesheet" href="css/conteudoPosFormulario.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>ESF</title>
</head>
<body>

    <header>
        <div class="logoTopo">
            <img src="img/brasaoQueimados.png" alt="brasãoQueinados">
        </div>
        <h1>Estratégia e Saúde da Família Santo Expedito</h1>
        <div class="navbarPrincipal">
            <ul>
                <li><a id="home" href="index.php"><strong>Início</strong></a></li>
                <li><a href="#">Pacientes</a></li>
                <li><a href="ruas.php">Ruas</a></li>
                <li><a href="fechamento.php">Fechamento</a></li>
                <li><a href="usuario.php"><img src="img/brasaoQueimados.png" alt=""></a></li>   
            </ul>
        </div>     
    </header>

    <div class="barraLateralEsquerda">
        <div class="pesquisaBarraLateralEsquerda">
            <input  type="text" placeholder="Pesquisar paciente">
        </div>
        <h6>Aparecer os pacientes cadastrados aqui</h6>
    </div>
    <!--FIM BARRA LATERAL ESQUERDA-->
    <!--==========================================-->


    <!--BARRA LATERAL DIREITA-->
    <div class="barraLateralDireita">
        <label for=""></label>
        <button class="btnGrupoLateralDireita novoPaciente"><strong>Novo Paciente</strong></button>
        <div class="divCadastrar">
            <button class="btnGrupoLateralDireita cancelarCadastro cancelarCadastro">Cancelar</button>
        </div>
        
        <button class="btnGrupoLateralDireita btnMeusPacientes"><strong>Meus Pacientes</strong></button>
        <div class="divPaciente">
            <button class="btnGrupoLateralDireita subBtnPaciente hipertensos">Hipertensos</button>
            <button class="btnGrupoLateralDireita subBtnPaciente diabeticos">Diabéticos</button>
            <button class="btnGrupoLateralDireita subBtnPaciente acamados">Acamados</button>
            <button class="btnGrupoLateralDireita subBtnPaciente domiciliados">Domiciliados</button>
            <button class="btnGrupoLateralDireita subBtnPaciente gestantes">Gestantes</button>
            <button class="btnGrupoLateralDireita subBtnPaciente listarMeusPacientes">Listar</button>
        </div>

        <button class="btnGrupoLateralDireita btnExame"><strong>Exame de Sangue</strong></button>
        <div class="divExame">
            <button class="btnGrupoLateralDireita subBtnExame agendar">Agendar</button>
            <button class="btnGrupoLateralDireita subBtnExame listarExameDeSangue">Listar</button>
        </div>

        <button class="btnGrupoLateralDireita btnBolsaFamilia"><strong>Bolsa Família</strong></button>
        <div class="divBFamilia">
            <button class="btnGrupoLateralDireita subBtnBolsaFamilia novaPesagem">Nova Pesagem</button>
            <button class="btnGrupoLateralDireita subBtnBolsaFamilia listarBolsaFamilia">Listar</button>
        </div>

        <button class="btnGrupoLateralDireita btnEntregaPreventivo"><strong>Preventivo</strong></button>
        <div class="divPreventivo">
            <button class="btnGrupoLateralDireita subBtnPreventivo EntregaPreventivo">Entregar</button>
            <button class="btnGrupoLateralDireita subBtnPreventivo listarPreventivo">Listar</button>
        </div>
        
        <button class="btnGrupoLateralDireita btnNotificacao"><strong>Notificações</strong></button>
        <div class="divNotificacao">
            <button class="btnGrupoLateralDireita subBtnNotificacao novaNotificacao">Nova Notificação</button>
        </div>

        <button class="btnGrupoLateralDireita btnCovid19" id="covid-19"><strong>COVID-19</strong></button>
    </div>
    <!--FIM BARRA LATERAL DIREITA-->
    <!--==========================================-->

    <!-- INÍCIO DO FORM-->
    <form action="" class="formulario" method="POST">  
        <fieldset class="border p-4">
        <legend class="legend">Dados do Paciente</legend>
            <div class="form-row inputSus">
                <div class="form-group col-md-4">
                    <label>SUS</label>
                    <input type="text" class="form-control ipt" id="inputSus" maxlength="15" disabled required>
                </div>       
            </div> <br>

            <div class="form-row">
                <div class="form-group inputNome">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control ipt" disabled required>
                        <?php 
                            if(strlen("nome") < 3)
                                echo "O nome precisa ter mais que 3 caracteres!"; //TESTANDO UMA PROTEÇÃO
                        ?>
                </div>
                <div class="form-group col-md-2 inputDataDeNascimento">
                    <label>Nascimento</label>
                    <input type="text" class="form-control ipt" disabled required>
                </div>
                <div class="form-group col-md-2 selectSexo">
                    <label>Sexo</label>
                    <select class="form-control slt" disabled required>
                        <option selected>Selecione</option>
                        <option value="valor1">Masculino</option>
                        <option value="valor2">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>RG</label>
                    <input type="text" class="form-control inputRg ipt" maxlength="9" disabled required>
                </div>
                <div class="form-group col-md-3">
                    <label>CPF</label>
                    <input type="text" class="form-control inputCpf ipt"  maxlength="11" disabled required>
                </div> 

                <!--PARTE DO EXAME DE SANGUE-->
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
                <!--FIM DA PARTE DO EXAME DE SANGUE
                =============================================-->
                
                <!--PARTE DO PREVENTIVO-->
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
            <!--FIM DA PARTE DO PREVENTIVO
            ===============================================-->
            
            <div class="form-group inputNomeMae">
                <label>Nome da Mãe</label>
                <input type="text" class="Nomes form-control ipt" disabled required>
            </div>
            <div class="form-group inputNomePai">
                <label>Nome do pai</label>
                <input type="text" class="Nomes form-control ipt" disabled required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Rua</label>
                    <input type="text" class="form-control ipt" disabled required>
                </div>
                <div class="form-group col-md-3 inputNomePai">
                    <label>Complemento</label>
                    <input type="text" class="form-control ipt" disabled>
                </div>   
                <div class="form-group col-md-1 inputNumero">
                    <label for="inputZip">Número</label>
                    <input type="text" class="form-control ipt" disabled>
                </div>
                    <div class="form-group col-md-3">
                        <label>Microárea</label>
                        <select class="form-control inputMicroArea slt" disabled required>
                            <option selected>Selecione</option>
                            <option value="valor1">Microárea01</option>
                            <option value="valor2">Microárea02</option>
                            <option value="valor3">Microárea03</option>
                            <option value="valor4">Microárea04</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Outras Informações do paciente</label>
                        <textarea class="form-control" placeholder="..." disabled rows="3"></textarea>
                    </div>               
            </div>
        </fieldset>
        <fieldset class="border p-4">
            <legend class="legend">Contatos</legend>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Celular</label>
                    <input type="text" class="form-control ipt" disabled required>
                </div>
                <div class="form-group col-md-3">
                    <label>Residencial</label>
                    <input type="text" class="form-control inputCResidencial ipt" disabled>
                </div>
        </fieldset>
        <button type="submit" class="salvar btnGrupo btn btn-outline-primary">Salvar</button>   
        <button type="submit" class="cancelar btnGrupo btn btn-outline-danger">Cancelar</button>
    </form>  
    <!--FIM DO FORMULÁRIO-->
    <!--==========================================-->

  <!-- DIVS COMORBIDADES DOS PACIENTES-->
    <div class="conteudoPosFormulario containerHipertensos">
        <fieldset class="border p-4">
            <legend class="legend">Hipertensos</legend>

        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerDiabeticos">
        <fieldset class="border p-4">
            <legend class="legend">Diabéticos</legend>

        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerAcamados">
        <fieldset class="border p-4">
            <legend class="legend">Acamados</legend>

        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerDomiciliados">
        <fieldset class="border p-4">
            <legend class="legend">Domiciliados</legend>

        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerGestantes">
        <fieldset class="border p-4">
            <legend class="legend">Gestantes</legend>

        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerListar">
        <fieldset class="border p-4">
            <legend class="legend">Listagem dos meus Pacientes</legend>

        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerListarExamesDeSangue">
        <fieldset class="border p-4">
            <legend class="legend">Exames de sangue</legend>

        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerListarBolsaFamilia">
        <fieldset class="border p-4">
            <legend class="legend">Bolsa Família</legend>

        </fieldset>
    </div>
    <div class="conteudoPosFormulario containerListarPreventivo">
        <fieldset class="border p-4">
            <legend class="legend">Preventivos</legend>

        </fieldset>
    </div>
</body>
</html>