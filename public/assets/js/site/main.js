
function removeCharEspeciais() {
  removeCharEspecifico("nome");
  removeCharEspecifico("assunto");
  removeCharEspecifico("message");
}

function removeCharEspecifico(sttring) {
  a = '\u{100}';
  b = '\u{10FFF0}';
  re = new RegExp(`[${a}-${b}]`,'g');
  var semEspecial = document.getElementById(sttring).value;
  semEspecial = semEspecial.replace(/[^a-zA-Z]/g, '');
  document.getElementById(sttring).value = semEspecial;XRegExp("^")
}






/* Modal de Editar Produto */

/* Guardar nome para o produto*/
function guardarNome(nomeGuardado,descguardado,valorguardado,id,imgprod) {
  console.log(nomeGuardado);
  var img = document.getElementById('prodimg');
  img.src = 'assets/img/produto/'+imgprod;
  $('#ModalEditar #valorRetornoModal').html(nomeGuardado);
  $('#nomemod').val(nomeGuardado);
  $('#descmod').val(descguardado);
  $('#valmod').val(valorguardado);
  $('#idmod').val(id);


}
function Bloqueartela() {
  
}
