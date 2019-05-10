$(document).ready(function(){
    $("#home a:contains('HOME')").parent().addClass('active');
    $("#servicos a:contains('SERVIÇOS')").parent().addClass('active');
    $("#empresa a:contains('EMPRESA')").parent().addClass('active');
    $("#contato a:contains('FALE CONOSCO')").parent().addClass('active');

    $('#inputPhone').mask('(99) 9999-99999');
});
