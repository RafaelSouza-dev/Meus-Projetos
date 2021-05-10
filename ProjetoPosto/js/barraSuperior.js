/*  ATIVANDO DROPDOWN PERFIL  
$('#dropdownPerfil').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  });*/
  $(function(){

    $("#dropdownPerfil").click(function() {
        $(".dropdown-menu").slideToggle();
    });
  })