$(document).ready(function () {

    $(".arrow").click(function () {





        $('html, body').animate({ scrollTop: $('#target').offset().top + 8 }, 'medium');


  });


//Animation

 $(window).scroll(function(){

   $(".arrow").css("opacity", 1 - $(window).scrollTop() /200);
 $(".divdaimg").css("opacity", 0 + $(window).scrollTop() /800);



  //250 is fade pixels
  });

 


  $("#checado").click(()=>{
    
  
    checado();
    
  });
  //Function checado e nao checado

    var loginError = $("#errado").text();
    var loginsuccess = $("#deucerto").text();

    if(loginError !=""||loginsuccess !=""){

      $(".login-form").css("height","320px");


    }

});

//check e o elemento checkbox ja o checado e o elemento i 
function checado() {
    
  var $ch = $('#check').is(":checked");

  $ch ? 0 : 1;

  if ($ch == true) {

    $("#checado").removeClass('fa-check text-success').addClass('fa-times text-danger');
    // alert(valor.val());
  }
  else {
    
    $("#checado").removeClass('fa-times text-danger').addClass('fa-check text-success');
    // alert(valor.val());

  }
};


