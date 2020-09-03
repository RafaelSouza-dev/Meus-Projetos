  /*$(function () { PARA FAZER O DROPDOWN DO BOOTSTRAP FUNCIONAR
    $('.dropdown-toggle').dropdown();
  }); */
  

$(function(){

  /*    FORMULÁRIO

  ESCONDENDO TODOS OS SALVAR DE DENTRO DO FORM,DE ACORDO COM CADA MENU*/
  $('.botoesSalvarForm').hide();
  /*=====================================*/


  /*OCULTANDO CAMPOS DO FORMULÁRIO*/
  $('.inputExame').hide()
    $('.inputPreventivo').hide();

  /*============================
  SLIDETOGGLE DOS BOTÕES SALVAR,CANCELAR E CAMPOS NO FORMULÁRIO*/
  $('.agendar').click(function(){
    $('.inputExame').slideToggle()
    $('.btnSalvarExame').slideToggle();
  })

  /*==============================*/
  $('.novaPesagem').click(function(){
    $('.btnSalvarBolsaFamilia').slideToggle();
  })

  /*==============================*/    
  $('.EntregaPreventivo').click(function(){
    $('.inputPreventivo').slideToggle()
    $('.btnSalvarPreventivo').slideToggle();
  })

  /*==============================*/
  $('.novaNotificacao').click(function(){
    $('.btnSalvarNotificacao').slideToggle();
  })

  $('.btnCovid19').click(function(){
    $('.containerAcamados').slideToggle();
  })

  /*==============================*/
  /*HABILITANDO TODOS OS CAMPOS DO FORMULÁRIO AO CLICAR EM NOVO PACIENTE*/
  $('.novoPaciente').click(function(){
    $('.cancelarCadastro').slideDown()
    $('input').prop("disabled",false)
    $('select').prop("disabled",false)
    $('textarea').prop("disabled",false)

  })
  /*DESABILITANDO TODOS OS CAMPOS DO FORMULÁRIO AO CLICAR EM CANCELAR*/
  $('.cancelarCadastro').hide()
  $('.cancelarCadastro').click(function(){
    $('.cancelarCadastro').slideUp()
    $('.ipt').prop("disabled",true)
    $('.slt').prop("disabled",true)
    $('form textarea').prop("disabled",true)

  })

  });







