$(document).ready(()=>{

        $(".login-form").addClass('sumir');
$("#fechar").click(()=>{
     $(".content").removeClass('hidden');

    setTimeout( ()=>{$("#mod-edit").removeClass('hidden').fadeOut("fast");},250);


});
// $("#Enviar").click(()=>{
//     $(".content").removeClass('hidden');
//
//    setTimeout( ()=>{$("#mod-edit").removeClass('hidden').fadeOut("fast");},250);
//
//
// });



});




    $("#pesquisar").keyup(()=>{


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

            $.get("http://localhost:8081/Tcc/public/?page=adm_produto", {},
             function (returndata) {

                var headline = $(returndata).find('#resultado');

                 $("#resultado").html(headline);
            });

        }


});
};

// Usuario =======================================================

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
//
function DeleteUsuario(id){
    var Id = id;
    console.log(id);
    $.ajax({
        url:'pages/forms/adm_form_usuario_delete.php',
        type: 'POST',
        dataType:'html',
        data: {'id': Id}

      }).done((data)=>{
                  $.get("http://localhost:8081/Tcc/public/?page=adm_usuario", {},
                  function (returndata) {
                      var headline = $(returndata).find('#resultado');
                      $("#resultado").html(headline);

                  });

        }).fail((data)=>{

                $("#erro").show('fast');

            });

        };




function NovoUsuario(){

    var Nome = $("#nome").val();
    var Senha = $("#senha").val();
    var Autoridade ;
    if($("#check").is(':checked')){
            Autoridade = 0;
    }
    else{
        Autoridade = 1;
    }



        $.ajax({
            url:'pages/forms/adm_form_usuario_new.php',
            type: 'POST',
            data: {nome: ''+Nome+'',senha:''+Senha+'',nivel_autoridade: Autoridade    }
        }).done((data)=>{


                  $("#exampleModal").modal('hide');
                  $("#form1")[0].reset();

                  $.get("http://localhost:8081/Tcc/public/?page=adm_usuario", {},
                  function (returndata) {
                      var headline = $(returndata).find('#resultado');
                      $("#resultado").html(headline);

                  });
                  $("#form1")[0].reset();
        }).fail((data)=>{

                $("#erro").show('fast');

            });



};




$("#nome").keyup(()=>{

    $("#login").submit(()=>{
        var dados = $("#nome").val();

    $.ajax({

          url:'pages/forms/busca_usuario.php',
                    type: 'POST',
                    async:true,
                    data: {'nome': dados}
                }).done((data)=>{


                    $("#erro").empty().html(data);

                });
                return false;
            });
     $("#nome").trigger('submit');







});


$(".bt-login").click(()=>{


    $(".login-form").removeClass("sumir");


});


$("#usuarios").keyup(()=>{


        var dados = $("#usuarios").val();

   $.ajax({

          url:'pages/forms/busca_usuario.php',
                    type: 'POST',
                    async:true,
                    data: {'nome': dados}
                }).done((data)=>{

                    $("#errado").html(data).fadeIn('slow');

                });

               $("#usuarios").trigger('ajax');
            });





















function loading_show(div){
    $(div).html("<img src='https://i.gifer.com/4V0b.gif'/>").fadeIn('fast');
};
function loading_hide(div){
    $(div).fadeOut('slow');
}  ;



$("#selecionar").change(()=>{


        $("#selec").submit();
        $("#selec")[0].reset();


        $("#selecionar").trigger('submit');
});


$("#btncor").click(()=>{
    $('#formdcor').submit();


});
$("#btncontato").click(()=>{
    $('#formdcontato').submit();




});




$("#check").change(()=>{
      var checado = $("#check").is(":checked");
    if(checado){
        $("#cor").removeAttr('disabled');
    }
    else{
      $("#cor").attr("disabled","disabled");
    }

});

// $("#imgUpload").click(()=>{
//
//     $("#imgUpload").change(()=>{
//
//     var valor = $("#imgUpload").val();
//
//
//     if(valor!= ""){
//         $("#fotocarregada").removeAttr('hidden')
//         // // alert(valor);
//         // $('#formuser')[0].submit(()=>{
//         //
//         //
//         //         return true;
//         //
//         // });
//         //
//
//     }
//
//
//
//   });
// });


function ProdutoEditar(nome){
    var Nome = nome;
    $.ajax({
        url:'pages/forms/adm_produto_editar.php',
        type: 'POST',
        dataType:'html',
        data: {'NOME': Nome} ,
        success: (data)=>{
          alert(data);

        }


});
};
