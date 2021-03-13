function edita(codigo){
  
  var cpf = codigo;
        $.ajax({
          type: 'post',
          url: 'edita.php',
          data: {cpf: cpf},
        
          success: dados => { console.log(dados) },
          error: erro => { console.log(erro) }
        }).done(function(resposta){

          $.post('edita.php', data => { 
            $('#pagina').html(resposta)
          })
        }) 				
  }

  function editaUser(codigo){
  
    var codigo = codigo;
          $.ajax({
            type: 'post',
            url: 'funcional/editaUser.php',
            data: {codigo: codigo},
          
            success: dados => { console.log(dados) },
            error: erro => { console.log(erro) }
          }).done(function(resposta){
  
            $.post('funcional/editaUser.php', data => { 
              $('#pagina').html(resposta)
            })
          }) 				
    }