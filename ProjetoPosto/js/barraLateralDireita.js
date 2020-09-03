
/*     BARRA LATERAL DIREITA */


$(function(){/*OCULTANDO OS SUBMENUS DA BARRA LATERAL DIREITA */
    
  $('.divPaciente').hide();
  $('.divExame').hide();
  $('.divPreventivo').hide();
  $('.divBFamilia').hide();
  $('.divNotificacao').hide()

  /*SLIDETOGGLE DOS SUBMENUS NA BARRA LATERAL DIREITA*/
  $('.btnMeusPacientes').click(function(){
    $('.divPaciente').slideToggle()
    $('.formulario').slideDown();
    $('.conteudoPosFormulario').hide();
  });

  $('.btnExame').click(function(){
    $('.divExame').slideToggle()
    $('.formulario').slideDown();
    $('.conteudoPosFormulario').hide();
  }); 

  $('.btnBolsaFamilia').click(function(){
    $('.divBFamilia').slideToggle()
    $('.formulario').slideDown();
    $('.conteudoPosFormulario').hide();
  }); 

  $('.btnEntregaPreventivo').click(function(){
    $('.divPreventivo').slideToggle()
    $('.formulario').slideDown();
    $('.conteudoPosFormulario').hide();
  }); 

  $('.btnNotificacao').click(function(){
    $('.divNotificacao').slideToggle()
  });
});




