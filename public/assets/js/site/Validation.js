window.onload= ()=>{



    (function Validacao() {
  
        $("#span1").hide();
        $("#span2").hide();
        $("#span3").hide();
        $("#span4").hide();
            $("#nome").focusout(() => {
                var txt = $("#nome").val();
                if (txt == "") {
                    $("#nome").addClass("border-danger");
                    $("#span1").fadeIn(200);
                }
                else {
                    $("#nome").removeClass("border-danger");
                    $("#span1").fadeOut(200);
                }
            });
            $("#email").focusout(() => {
                var txt = $("#email").val();
                if (txt == "") {
                    $("#email").addClass("border-danger");
                    $("#span2").fadeIn(200);
                }
                else {
                    $("#email").removeClass("border-danger");
                    $("#span2").fadeOut(200);
                }
            });
            $("#assunto").focusout(() => {
                var txt = $("#assunto").val();
                if (txt == "") {
                    $("#assunto").addClass("border-danger");
                    $("#span3").fadeIn(200);
                }
                else {
                    $("#assunto").removeClass("border-danger");
                    $("#span3").fadeOut(200);
                }
            });
            $("#mensage").focusout(() => {
                var txt = $("#mensage").val();
                if (txt == "") {
                    $("#mensage").addClass("border-danger");
                    $("#span4").fadeIn(200);
                }
                else {
                    $("#mensage").removeClass("border-danger");
                    $("#span4").fadeOut(200);
                }
            });
        }());

};


