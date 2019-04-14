window.onload= function (){




    function iniciaModal(modalID){
        const modal = document.getElementById(modalID);
        if(modal){

            modal.classList.add('ativa');
            console.log(modalID);
            modal.addEventListener('click', (e)=>{
            if(e.target.id == modalID  || e.target.className =='fechar')
            {
                modal.classList.remove('ativa');
            }


            });
        }

    }
    const about = document.querySelector('.about');
     about.addEventListener('click', ()=>iniciaModal('modal'));

     $(function(){
        // this will get the full URL at the address bar
        var url = window.location.href;
        console.log(url);
        // passes on every "a" tag
        $("#collapsibleNavbar a").each(function() {
                // checks if its the same on the address bar
            if(url == (this.href)) {
                $(this).closest("li").addClass("ativo");
            }
        });
    });


};
$(document).ready(function(){

    $(".arrow").click(function(){





        $('html, body').animate({scrollTop: $('#target').offset().top +8}, 'medium');


    });

});
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
