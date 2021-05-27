
function limpa_formulário() {
	document.getElementById('confirmPassowrd').value=("");
}

function validaPass(){
    var pass = document.getElementById('newPass').value;
    var confPass = document.getElementById('confirmPassowrd').value;

    if(pass !== confPass){
        limpa_formulário();
        alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
        "<strong> As senhas não são compatíveis. Por favor, digite novamente!!" +
        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
        "<span aria-hidden='true'>&times;</span>" +
        "</button>" +
        "</div>";
        document.getElementById("validaPass").innerHTML += alert;
    }
}
