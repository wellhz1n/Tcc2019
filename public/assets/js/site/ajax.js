$(document).ready(()=>{

    $("#Enviar").click(()=>{

        var nome =  $("#nome").val();
        // alert(nome);
        $.post("pages/forms/contato.php", 'nome= ' + nome, function( nome ) {
          console.log(nome);
});
    });





});
