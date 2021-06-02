function limpa_formulário_cep() {
	//Limpa valores do formulário de cep.
	document.getElementById('cep').value=("");
	document.getElementById('rua').value=("");
	document.getElementById('bairro').value=("");
	document.getElementById('cidade').value=("");
	document.getElementById('uf').value=("");

}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
	//Atualiza os campos com os valores.
	document.getElementById('rua').value=(conteudo.logradouro);
	document.getElementById('bairro').value=(conteudo.bairro);
	document.getElementById('cidade').value=(conteudo.localidade);
	document.getElementById('uf').value=(conteudo.uf);

    //Torna os campos readOnly
	document.getElementById('rua').readOnly = true;
  document.getElementById('bairro').readOnly = true;
	document.getElementById('cidade').readOnly = true;
  var teste = document.getElementById('teste');
  teste.innerHTML = "<label>UF *</label>" +
  "<input type='text' name='state' value=' "  + conteudo.uf + " ' class='form-control' id='uf' readOnly required />"

} //end if.
else {
	//CEP não Encontrado.
	limpa_formulário_cep();
	alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
					"<strong> CEP não encontrado!!" +
					"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
					"<span aria-hidden='true'>&times;</span>" +
					"</button>" +
					"</div>";
	document.getElementById("mostrar").innerHTML += alert;
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

	//Expressão regular para validar o CEP.
	var validacep = /^[0-9]{8}$/;

	//Valida o formato do CEP.
	if(validacep.test(cep)) {

		//Preenche os campos com "..." enquanto consulta webservice.
		document.getElementById('rua').value="...";
		document.getElementById('bairro').value="...";
		document.getElementById('cidade').value="...";
		document.getElementById('uf').value="...";


		//Cria um elemento javascript.
		var script = document.createElement('script');

		//Sincroniza com o callback.
		script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

		//Insere script no documento e carrega o conteúdo.
		document.body.appendChild(script);

	} //end if.
	else {
		//cep é inválido.
		limpa_formulário_cep();
		alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
					"<strong> CEP inválido!!" +
					"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
					"<span aria-hidden='true'>&times;</span>" +
					"</button>" +
					"</div>";
	document.getElementById("mostrar").innerHTML += alert;
	}
} //end if.
else {
	//cep sem valor, limpa formulário.
	limpa_formulário_cep();

    //Torna os campos editaveis
	document.getElementById('rua').readOnly = false;
    document.getElementById('bairro').readOnly = false;
	document.getElementById('cidade').readOnly = false;
    var teste = document.getElementById('teste');
    teste.innerHTML = "<label>UF *</label>" +
    "<select name='state' class='form-control' id='uf' required>" +
    "<option value=''></option>" +
    "<option value='AC'>AC</option>" +
    "<option value='AL'>AL</option>" +
    "<option value='AP'>AP</option>" +
    "<option value='AM'>AM</option>" +
    "<option value='BA'>BA</option>" +
    "<option value='CE'>CE</option>" +
    "<option value='DF'>DF</option>" +
    "<option value='ES'>ES</option>" +
    "<option value='GO'>GO</option>" +
    "<option value='MA'>MA</option>" +
    "<option value='MT'>MT</option>" +
    "<option value='MS'>MS</option>" +
    "<option value='MG'>MG</option>" +
    "<option value='PA'>PA</option>" +
    "<option value='PB'>PB</option>" +
    "<option value='PR'>PR</option>" +
    "<option value='PE'>PE</option>" +
    "<option value='PI'>PI</option>" +
    "<option value='RJ'>RJ</option>" +
    "<option value='RN'>RN</option>" +
    "<option value='RS'>RS</option>" +
    "<option value='RO'>RO</option>" +
    "<option value='RR'>RR</option>" +
    "<option value='SC'>SC</option>" +
    "<option value='SP'>SP</option>" +
    "<option value='SE'>SE</option>" +
    "<option value='TO'>TO</option>" +
    "</select>"

}
};
