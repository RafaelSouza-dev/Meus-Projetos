$(function(){
    $('form').hide()
    $('.listagem').hide()
    $('.filtrar').hide()
    $('.barraLateralPesquisarPaciente').hide()

    $('.mostrarPaciente').hide() //FUNÇÕES TEMPORÁRIAS. SOMENTE PARA MOSTRAR O PROFESSOR
    $('#button-addonPesquisarExame').click(function(){
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

   $('.btnAgendar').click(function(){
        $('form').slideToggle()
   });
});
