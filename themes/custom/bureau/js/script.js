jQuery.noConflict(); 

(function ($) {
$(document).ready(function(){
    console.log("rodou");
    
    var um = $('.form-item-field-cnpj--0-value input').mask('00.000.000/0000-00', {reverse: true});
    var dois = $('.postal-code').mask('00000-000');    
    
    function renameSub(){
      var but = $('#edit-submit');
      but.val("SOLICITE SEU ORÇAMENTO");
    }
    function renameTel(){
      var tel = $('#edit-field-telefone-s-add-more');
      tel.val("ADICIONAR OUTRO TELEFONE");      
    }
    renameSub();
    renameTel();
  });
})(jQuery);
