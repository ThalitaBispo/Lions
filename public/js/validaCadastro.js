function validaC()
 {
     var senha = document.getElementById('password');
     var NovaSenha = document.getElementById('newPass');
     var confirma = document.getElementById('confirmPassowrd');

     if(senha != '')
     {
         senha.required = true;
         NovaSenha.required = true;
         confirma.required = true;
     }
 }
