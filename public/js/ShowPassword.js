function mostrarsenha() {
  var tipo = document.getElementById("senha");
  if(tipo.type === "password") {
    tipo.type = "text";
  }
  else {
    tipo.type = "password";
  }
}

function mostrarsenhaNova() {
  var nsenha = document.getElementById("novaSenha");
  if(nsenha.type === "password") {
    nsenha.type = "text";
  }
  else {
    nsenha.type = "password";
  }
}

function mostrarsenhaConf() {
  var tipo = document.getElementById("confSenha");
  if(tipo.type === "password") {
    tipo.type = "text";
  }
  else {
    tipo.type = "password";
  }
}