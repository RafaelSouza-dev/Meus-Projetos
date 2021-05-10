$(function(){

    $('form').hide()
    $('.listagem').hide() 
    $('.filtrar').hide()
    $('.barraLateralPesquisarPaciente').hide()
    
    $('.btnFichaNotificacao').click(function(){
        $('form').slideToggle()
    })

    $('.mostrarPaciente').hide() //FUNÇÕES TEMPORÁRIAS. SOMENTE PARA MOSTRAR O PROFESSOR
    $('#button-addonPesquisarNotificacao').click(function(){
        $('.containerPrincipal').hide()
        $('.mostrarPaciente').slideToggle()
    })
        
     /*  PARTE DA LISTAGEM*/
    $('.btnFechar').click(function(){   
        $('.mostrarPaciente').hide()
        $('.listagem').hide()
        $('.filtrar').hide()
        $('.containerPrincipal').slideDown()

    })

    $('.btn-outline-success').click(function(){ /*  LISTAR  */
        $('.barraLateralPesquisarPaciente').slideToggle()
        /*$('#button-addonListarNotificacao').html('Esconder')*/
    }) 

    
    
})