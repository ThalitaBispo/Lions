
function validaData(date) {
    var date = date;

    partesData = date.split('/');

    dataAgora = new Date(partesData[2], partesData[1] - 1, partesData[0]);

    if(dataAgora < new Date){
        document.getElementById('data').value=("");
        alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
					"<strong> Data inválida. Por favor, digite novamente!!" +
					"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
					"<span aria-hidden='true'>&times;</span>" +
					"</button>" +
					"</div>";
	document.getElementById("validaData").innerHTML += alert;
    }
    if(partesData[1] > 12){
        document.getElementById('data').value=("");
        alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
					"<strong> Mês inválido. Por favor, digite novamente!!" +
					"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
					"<span aria-hidden='true'>&times;</span>" +
					"</button>" +
					"</div>";
	document.getElementById("validaData").innerHTML += alert;
    }
    if(partesData[0] > 31){
        document.getElementById('data').value=("");
        alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
					"<strong> Dia inválido. Por favor, digite novamente!!" +
					"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
					"<span aria-hidden='true'>&times;</span>" +
					"</button>" +
					"</div>";
	document.getElementById("validaData").innerHTML += alert;
    }
}
