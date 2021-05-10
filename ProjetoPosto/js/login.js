/*  ATIVANDO DROPDOWN LOGIN  */
$('#modalLogin').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  });