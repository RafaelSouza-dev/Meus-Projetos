$(function(){
    $('.listagem').hide()
    $('.filtrar').hide()
    $('.barraLateralPesquisarPaciente').hide()

    $('.dadosPessoaConfiancaPaciente').hide()
    $('.mostrarPaciente').hide()
    $('.btnEntregaAConhecido').click(function(){
        $('.dadosPessoaConfiancaPaciente').slideToggle()
    })

    $('#button-addonPesquisarPreventivo').click(function(){ //FUNÇÕES TEMPORÁRIAS. SOMENTE PARA MOSTRAR O PROFESSOR
        $('.containerPrincipal').hide()
        $('.mostrarPaciente').slideToggle()
    })

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