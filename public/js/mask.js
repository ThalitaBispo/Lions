
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function leech(v){
    v=v.replace(/o/gi,"0")
    v=v.replace(/i/gi,"1")
    v=v.replace(/z/gi,"2")
    v=v.replace(/e/gi,"3")
    v=v.replace(/a/gi,"4")
    v=v.replace(/s/gi,"5")
    v=v.replace(/t/gi,"7")
    return v
}
function soNumeros(v){
    return v.replace(/\D/g,"")
}


function telefone(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d\d)(\d)/g,"($1) $2");
    v=v.replace().length <=  13 ? v=v.replace(/(\d{4})(\d)/,"$1-$2") : v=v.replace(/(\d{5})(\d)/,"$1-$2");
    return v;
}

function cpf(v){
    v=v.replace(/\D/g,"")
    v=v.replace().length <= 13 ? v=v.replace(/(\d{3})(\d)/,"$1.$2") : v=v.replace(/(\d{2})(\d)/,"$1.$2");
    v=v.replace().length <= 13 ? v=v.replace(/(\d{3})(\d)/,"$1.$2") : v=v.replace(/(\d{3})(\d)/,"$1.$2");
    v=v.replace().length <= 13 ? v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") : v=v.replace(/(\d{3})(\d)/,"$1/$2");
    v=v.replace().length <= 13 ? v=v.replace(/(\d{3})(\d)/,"$1$2") : v=v.replace(/(\d{4})(\d{1,2})$/,"$1-$2");
    return v;
}

function maskCep(v){
    v=v.replace(/\D/g,"")
    v=v.replace(/(\d{5})(\d)/,"$1-$2")
    return v;
}

function mdata(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/(\d{2})(\d)/,"$1/$2");
    v=v.replace(/(\d{2})(\d)/,"$1/$2");

    v=v.replace(/(\d{2})(\d{2})$/,"$1$2");
    return v;
}

function numberToReal(v) {
    v=v.replace(/\D/g,"");
    v=v.replace().length <= 4 ? v=v.replace(/(\d{2})(\d)/,"$1.$2") : v=v.replace(/(\d{3})(\d)/,"$1.$2")
    ? v=v.replace(/(\d{3})(\d{1,2})$/,"$1.$2") : v=v.replace(/(\d{4})(\d)/,"$1.$2");
    return v;

}

