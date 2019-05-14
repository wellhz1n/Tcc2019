
function removeCharEspeciais() {
  removeCharEspecifico("nome");
  removeCharEspecifico("assunto");
  removeCharEspecifico("message");
}

function removeCharEspecifico(sttring) {
  var semEspecial = document.getElementById(sttring).value;
  semEspecial = semEspecial.replace(/[^a-zA-Z]/g, '');
  document.getElementById(sttring).value = semEspecial;
}
