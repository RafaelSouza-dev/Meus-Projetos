$(function(){
    

/*  CONTEÚDO PÓS FORMULÁRIO,COMORBIDADES DOS PACIENTES


    OCULTANDO AS DIVS DE COMORBIDADES DOS PACIENTES*/
    $('.conteudoPosFormulario').hide();

  /*==============================
  
  SLIDETOGGLE DOS CAMPOS DE ACORDO COM CADA MENU DA BARRA LATERAL DIREITA*/

    $('.hipertensos').click(function(){
        $('.conteudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerHipertensos').slideDown();
    })

    $('.diabeticos').click(function(){
        $('.conteudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerDiabeticos').slideDown();

    })

    $('.acamados').click(function(){
        $('.conteudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerAcamados').slideDown();

    })

    $('.domiciliados').click(function(){
        $('.conteudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerDomiciliados').slideDown();

    })

    $('.gestantes').click(function(){
        $('.conteudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerGestantes').slideDown();

    })

    $('.listarMeusPacientes').click(function(){
        $('.conteudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerListar').slideDown();
    })


    $('.listarExameDeSangue').click(function(){
        $('.conteudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerListarExamesDeSangue').slideDown();
    })


    $('.listarBolsaFamilia').click(function(){
        $('.conteudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerListarBolsaFamilia').slideDown();
    })


    $('.listarPreventivo').click(function(){
        $('.contaudoPosFormulario').hide();
        $('.formulario').slideUp();
        $('.containerListarPreventivo').slideDown();
    })
    });