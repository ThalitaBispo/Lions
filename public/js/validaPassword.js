
function validaPass(){
    var pass = document.getElementById('password').value;
    var confPass = document.getElementById('confirmPassowrd').value;

    if(pass !== confPass){
        alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
          "<strong> Senhas incompatíveis!!" +
          "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
          "<span aria-hidden='true'>&times;</span>" +
          "</button>" +
          "</div>";
          return document.getElementById("validarP").innerHTML += alert;
    } else {
        alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
          "<strong> Senhas compatíveis!!" +
          "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
          "<span aria-hidden='true'>&times;</span>" +
          "</button>" +
          "</div>";
          return document.getElementById("validarP").innerHTML += alert;

    }
}