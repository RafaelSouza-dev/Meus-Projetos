$(function(){

    $('form').hide()
    $('.listagem').hide() 
    $('.filtrar').hide()
    $('.barraLateralPesquisarPaciente').hide()
    
    $('.btnFichaCovid').click(function(){
        $('form').slideToggle()
    })

    /*ANIMAÇÃO DAS DATAS */
    $('.dataExameClass').hide()  
    $('#flexRadioDefault1,#flexRadioDefault2').click(function(){
        $('.dataExameClass').slideDown()

    })
    $('#flexRadioDefault3').click(function(){
        $('.dataExameClass').slideUp()

    })
    $('.mostrarPaciente').hide() //FUNÇÕES TEMPORÁRIAS. SOMENTE PARA MOSTRAR O PROFESSOR
    $('#button-addonPesquisarCovid').click(function(){
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

    $('.btn-outline-success').click(function(){
        $('.barraLateralPesquisarPaciente').slideToggle()
    }) 

    
    
})