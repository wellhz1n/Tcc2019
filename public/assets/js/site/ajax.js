$(document).ready(()=>{

$("#fechar").click(()=>{
    $(".content").removeClass('hidden').fadeIn('fast');

    $("#mod-edit").removeClass('hidden');


}); 



});
                   
                 


    $("#pesquisar").focusout(()=>{
    

     $("#pesquisa").submit(()=>{

            var dados = $("#pesquisar").val();
           
            $.ajax({
                    url:'pages/forms/busca_produto.php',
                    type: 'POST',
                    async:true,
                    dataType:'html',
                    data: {'pesqui': dados} ,
                    
                    beforeSend:()=>{

                     
                        
                      
                        loading_show("#resultado");
                        // $("#resultado").html("Carregando");

                    },
                    
                    success:(data)=>{

                        

                        $("#resultado").empty().html(data).fadeIn('slow');
                        // $("#resultado").empty();
                        
                    }
         

            });

            return false;





     });


    
     $("#pesquisa").trigger('submit');



  });





    

function ProdutoDel(id){
    var Id = id;
 
    $.ajax({
        url:'pages/forms/adm_produto_del.php',
        type: 'POST',
        dataType:'html',
        data: {'ID': Id} ,
        success: (data)=>{
          
               window.location.href = 'http://localhost:8081/Tcc/public/?page=adm_produto';

        }


});
};



function LevaUsuarioId(id,nome,autoridade){
    var Id = id;
    var Nome = nome;
    var Autoridade = autoridade;

        $.ajax({
            url:'pages/forms/adm_usuario_edit.php',
            type: 'POST',
            data: {id: Id ,nome: ''+Nome+'',nivel_autoridade: Autoridade    } ,
            success: (data)=>{
                $("#mod-edit").addClass('hidden').fadeIn('fast');
                $(".content").addClass('hidden').fadeIn('fast');

              $("#result").html(data);

                   
            }
    
        });
   

};

function loading_show(div){
    $(div).html("<img src='https://i.gifer.com/4V0b.gif'/>").fadeIn('fast');
};
function loading_hide(div){
    $(div).fadeOut('slow');
}  ;