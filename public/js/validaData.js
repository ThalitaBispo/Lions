
function validaData(date) {
    var date = date;

    // date.trim();

    // date = date.replace('/', '');
    // date = date.replace('/', '');
    partesData = date.split('/');

    dataAgora = new Date(partesData[2], partesData[1] - 1, partesData[0]);

    if(dataAgora > new Date){
        return alert('Data inválida');
    }

    //alert(`${dataAgora}`)
}
