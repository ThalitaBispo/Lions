function mostrarsenha() {
  var tipo = document.getElementById("password");
  if(tipo.type === "password") {
    tipo.type = "text";
  }
  else {
    tipo.type = "password";
  }
}

function mostrarsenhaConf() {
  var tipo = document.getElementById("confirmPassowrd");
  if(tipo.type === "password") {
    tipo.type = "text";
  }
  else {
    tipo.type = "password";
  }
}
