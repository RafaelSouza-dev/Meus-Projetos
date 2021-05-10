
/*     BARRA LATERAL MENU */


$(function(){/*OCULTANDO OS SUBMENUS DA BARRA LATERAL MENU */
    
  $('.divPaciente').hide();
  $('.divExame').hide();
  $('.divPreventivo').hide();
  $('.divBFamilia').hide();
  $('.divNotificacao').hide()

/* AÇÃO DOS BOTÕES DA DIV QUE MOSTRA OS PACIENTES */
$('.subBtnPaciente').click(function(){
  $('.mostrarPaciente').slideUp();
  $('.imagemPlanoDeFundo').slideUp()
})
$('.novoPaciente').click(function(){
  $('.mostrarPaciente').slideUp();
  $('.imagemPlanoDeFundo').slideUp()
})

/*=======================================


  /*SLIDETOGGLE DOS SUBMENUS NA BARRA LATERAL MENU*/
  /*SLIDETOGGLE EM NOVO PACIENTE*/
  $('.novoPaciente').click(function(){
    $('.formulario').slideDown();
    $('.cancelarCadastro').slideDown();

  })
  /*SLIDETOGGLE EM CANCELAR*/
  $('.cancelarCadastro').hide()
  $('.cancelarCadastro').click(function(){
    $('.formulario').slideUp();
    $('.cancelarCadastro').slideUp();
    $('.imagemPlanoDeFundo').slideDown()
  });
  
  $('.btnMeusPacientes').click(function(){
    $('.divPaciente').slideToggle();
    $('.conteudoPosFormulario').hide();
    $('.imagemPlanoDeFundo').slideDown()
    /*$('.mostrarPaciente').slideDown();*/
  });

});




