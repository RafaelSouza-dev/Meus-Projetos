$(function(){
    /*  OCULTANDO OS CAMPOS */
    $('.divCadastrarUsuario').hide();
    $('.divEditarUsuario').hide();
    $('.divCancelarListagem').hide();
    $('.listagemDeUsuarios').hide();

    /*======================*/

    $('.novoUsuario').click(function(){
        $('.divCadastrarUsuario').slideDown();
        $('input').prop("disabled",false);
        $('select').prop("disabled",false);
    });

    $('.cancelarCadastroUsuario').click(function(){
        $('.divCadastrarUsuario').slideUp();
        $('input').prop("disabled",true);
        $('select').prop("disabled",true);
    })

    $('.editarUsuario').click(function(){
        $('.divEditarUsuario').slideDown();
        $('input').prop("disabled",false);
        $('select').prop("disabled",false);
    })

    $('.cancelarEdicaoUsuario').click(function(){
        $('.divEditarUsuario').slideUp();
        $('input').prop("disabled",true);
        $('select').prop("disabled",true);
    })

    $('.listarUsuario').click(function(){
        $('.formulario').slideUp();
        $('.listagemDeUsuarios').slideDown();
        $('.divCancelarListagem').slideDown();
    })

    $('.cancelarListagem').click(function(){
        $('.formulario').slideDown();
        $('.listagemDeUsuarios').slideUp();
        $('.divCancelarListagem').slideUp();
    })
    
});