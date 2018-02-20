function validaNome(nome){
    let regex = /\b[A-Za-zÀ-ú][A-Za-zÀ-ú]+,?\s[A-Za-zÀ-ú][A-Za-zÀ-ú]{2,19}\b/gi;

    return regex.test(nome);
}
function validaData(data){
    let dataAtual = new Date();
    let anoAtual = dataAtual.getFullYear();

    let dia         = data.substr(0,2);   
    let barra1      = data.substr(2,1);   
    let mes         = data.substr(3,2);   
    let barra2      = data.substr(5,1);   
    let ano         = data.substr(6,4);   

    if(data.length!=10||barra1!="/"||barra2!="/"||isNaN(dia)||isNaN(mes)||isNaN(ano)||dia>31||mes>12) return false;   
    if((mes==4||mes==6||mes==9||mes==11)&&dia==31) return false;   
    if(mes==2 && (dia>29||(dia==29&&ano%4!=0))) return false;   
    if(ano < 1900) return false;   
    return true;   
}

function validaCPF(cpf){
	let regex = /([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})/;

	return regex.test(cpf);
}

function validaDinheiro(valor){
    let regex = /\$?\d{1,3}(,?\d{3})*(\.\d{1,2})?/;

    return regex.test(valor);
}