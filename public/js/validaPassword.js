
function validaPass(){
    var pass = document.getElementById('password').value;
    var confPass = document.getElementById('confirmPassowrd').value;

    if(pass !== confPass){
        alert('Senhas Incompatíveis!!');
    }
}
