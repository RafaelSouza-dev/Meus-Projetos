$(function(){

    $('.listagem').hide()
    $('.filtrar').hide()
    $('.barraLateralPesquisarPaciente').hide()
    /*  ADICIONANDO E REMOVENDO DEPENDENTES E SEUS CAMPOS */
    let cont =1
    $('#btnAddDependente').click(function(){ 
        cont ++
        $('.dependentes').append('<div class="form-group" id="campo' + cont + '"><label for=""> Nome do dependente:</label><input type="text"name="dependentes[]"class="form-control col-7"><label>NIS: </label><input type="text" class="form-control col-3" name="dependentes[]"><label>SUS: </label><input type="text" class="form-control col-3" name="dependentes[]"><label>Data de nascimento: </label><input type="text" class="form-control col-2" name="dependentes[]"><button class="btnRemoverDependente" id="' + cont + '"> - Remover dependente </button><hr></div>');
    });
    $('form').on('click', '.btnRemoverDependente', function () {
        let button_id = $(this).attr("id");
        $('#campo' + button_id + '').remove();
    });
    /*  ANIMAÇÃOO NO BOTÃO DE  INSERIR DADOS */
    $('form').hide() 
    $('.btnInserirDados').click(function(){

        $('form').slideToggle()
    })

    $('.mostrarPaciente').hide() //FUNÇÕES TEMPORÁRIAS. SOMENTE PARA MOSTRAR O PROFESSOR
    $('#button-addonPesquisarFamilia').click(function(){
        $('.containerPrincipal').hide()
        $('.mostrarPaciente').slideToggle()
    })

    /*  PARTE DE MOSTRAR A PESQUISA */
   $('.btnFechar').click(function(){   
    $('.mostrarPaciente').hide()
    $('.listagem').hide()
    $('.filtrar').hide()
    $('.containerPrincipal').slideDown()
    })

    /*  LISTAGEM */
    $('.btn-outline-success').click(function(){
        $('.barraLateralPesquisarPaciente').slideToggle()
    }) 
});