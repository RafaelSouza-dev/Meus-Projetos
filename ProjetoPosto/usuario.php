<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/barraSuperior.css">
    <link rel="stylesheet" href="css/barraLateralEsquerdaUsuario.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/barraLateralDireitaUsuario.css">
    <link rel="stylesheet" href="css/formularioUsuario.css">
    <title>Document</title>
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
                <li><a href="pacientes.php">Pacientes</a></li>
                <li><a href="ruas.php">Ruas</a></li>
                <li><a href="fechamento.php">Fechamento</a></li>
                <li><a href="usuario.php"><img src="img/brasaoQueimados.png" alt=""></a></li>   
            </ul>
        </div>     
    </header>

    <div class="barraLateralEsquerda">
        <div class="pesquisaBarraLateralEsquerda">
            <input  type="text" placeholder="Pesquisar usuário">
        </div>
        <h6>Aparecer os usuários cadastrados aqui</h6>
    </div>
    <!--FIM BARRA LATERAL ESQUERDA-->
    <!--==========================================-->

     <!--BARRA LATERAL DIREITA-->
    <div class="barraLateralDireitaUsuario">
        <label for=""></label>
        <button class="btnGrupoLateralDireitaUsuario novoUsuario"><strong>Novo Usuário</strong></button>
        <div class="divCadastrarUsuario">
            <button class="btnGrupoLateralDireitaUsuario cancelarCadastroUsuario">Cancelar</button>
        </div>
        <button class="btnGrupoLateralDireitaUsuario editarUsuario"><strong>Editar Usuário</strong></button>
        <div class="divEditarUsuario">
            <button class="btnGrupoLateralDireitaUsuario cancelarEdicaoUsuario">Cancelar</button>
        </div>
        <button class="btnGrupoLateralDireitaUsuario listarUsuario"><strong>Listar Usuários</strong></button>
        <div class="divCancelarListagem">
            <button class="btnGrupoLateralDireitaUsuario cancelarListagem">Cancelar</button>
        </div>
    </div>


    <!--        INÍCIO FO FORMULÁRIO   -->
    <form action="" class="formulario" method="POST" enctype="multipart/form-data">  
        <fieldset class="border p-4">
        <legend class="legend">Meus Dados</legend>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Matrícula</label>
                    <input type="text" class="form-control" maxlength="15" disabled>
                </div>       
            </div>

            <div class="form-row">
                <div class="form-group inputNome">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control ipt" disabled require>
                        <?php 
                            if(strlen('nome') < 3)
                                echo "O nome precisa ter mais que 3 caracteres!"; //TESTANDO UMA PROTEÇÃO
                        ?>
                </div>
                <div class="form-group col-md-2 inputDataDeNascimento">
                    <label>Nascimento</label>
                    <input type="text" class="form-control ipt" disabled require>
                </div>
                <div class="form-group col-md-2 selectSexo">
                    <label>Sexo</label>
                    <select class="form-control slt" disabled require>
                        <option selected>Selecione</option>
                        <option value="valor1">Masculino</option>
                        <option value="valor2">Feminino</option>
                    </select>
                </div>
                <!--PARTE DO CARGO DO USUÁRIO-->    
                <div class="form-group col-md-3 ">
                    <label class="inputTipoCargo">Cargo</label>
                    <select class="form-control inputSelectTipoCargo" disabled require>
                        <option selected>Selecione</option>
                        <option value="valor1">Agente C de Saúde</option>
                        <option value="valor2">Técnico(a)de Enfermagem</option>
                        <option value="valor3">Enfermeiro(a)</option>
                        <option value="valor4">Médico(a)</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>RG</label>
                    <input type="text" class="form-control inputRg ipt" maxlength="9" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>CPF</label>
                    <input type="text" class="form-control inputCpf ipt"  maxlength="11" disabled>
                </div> 
                <div class="form-group col-md-3" >
                <label>Microárea</label>
                    <select class="form-control inputMicroArea" disabled require>
                        <option selected>Selecione</option>
                        <option value="valor1">Microárea01</option>
                        <option value="valor2">Microárea02</option>
                        <option value="valor3">Microárea03</option>
                        <option value="valor4">Microárea04</option>
                    </select>
                </div>  
                <div class="form-group col-md-2" >
                <label>Nível de Acesso</label>
                    <select class="form-control inputMicroArea" disabled require>
                        <option selected>Selecione</option>
                        <option value="valor1">Nível01</option>
                        <option value="valor2">Nível02</option>
                        <option value="valor3">Nível03</option>
                    </select>
                </div> 
                <div class="form-group col-md-3 inputLogin">
                        <label>Login</label>
                        <input type="text" class="form-control ipt" disabled require>
                </div>
                <div class="form-group col-md-2 inputSenha">
                        <label>Senha</label>
                        <input type="password" class="form-control ipt" disabled require>
                </div>  
            </div>              
        </fieldset>

        <fieldset class="border p-4">
            <legend class="legend">Contatos</legend>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Celular</label>
                    <input type="text" class="form-control ipt" disabled require>
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

    <div class="listagemDeUsuarios">
        <fieldset class="border p-4">
        <legend class="legend">Usuários</legend>
        </fieldset>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script><!--ARQUIVOS NECESSÁRIOS PARA O FUNCIONAMENTO DO DROPDOWN-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/barraLateralDireitaUsuario.js"></script>
</body>
</html>