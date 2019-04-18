window.onload = function () {




    function iniciaModal(modalID) {
        const modal = document.getElementById(modalID);
        if (modal) {

            modal.classList.add('ativa');
            console.log(modalID);
            modal.addEventListener('click', (e) => {
                if (e.target.id == modalID || e.target.className == 'fechar') {
                    modal.classList.remove('ativa');
                }


            });


      };


    }
    const about = document.querySelector('.about');
    about.addEventListener('click', () => iniciaModal('modal'));

    $(function () {
        // this will get the full URL at the address bar
        var url = window.location.href;
        console.log(url);
        // passes on every "a" tag
        $("#collapsibleNavbar a").each(function () {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("ativo");
            }
        });
    });
  };



$(document).ready(function () {

    $(".arrow").click(function () {





        $('html, body').animate({ scrollTop: $('#target').offset().top + 8 }, 'medium');


  });









  

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

});
////Funcao Para Validacao dos Campos Qunado Possivel Separar em Outro Arquivo/////
//
// $(window).scroll(function(){
//
//     $(".arrow").css("opacity", 1 - $(window).scrollTop() /200);
//     $(".divdaimg").css("opacity", 0 + $(window).scrollTop() /800);
//
//
//
//   //250 is fade pixels
//   });
