
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

                        $("#resultado").empty().html("Carregando");

                    },
                    
                    success:(data)=>{
                        
                        $("#resultado").empty().html(data);
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
