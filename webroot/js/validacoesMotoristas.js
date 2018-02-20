$(document).ready(function(){
	$('#cpf_motorista').mask("999.999.999-99");
	$('#data_motorista').mask("99/99/9999");

	//validações
	$('.motoristas').change(function(){
		var id = $(this).attr('id');
		validacaoMotorista(id);
	});

	$('#btnMotorista').click(function(){
		if(!verificarCampos()){
			event.preventDefault();
		}		
	});
});

function validacaoMotorista(id){
	switch(id){
		case 'nome_motorista': 
			var texto = id + "Texto";
			if(!validaNome($('#nome_motorista').val())){
	      		$('#'+texto).html("<p class='alert alert-danger'>Você precisa inserir o nome válido</p>");
			}
      		else{
      			$('#'+texto).html("");
      		}
			break;

		case 'data_motorista':
			var texto = id + "Texto";
			if(!validaData($('#data_motorista').val())){
				$('#'+texto).html("<p class='alert alert-danger'> Insira data corretamente</p>");
			}
			else{
				$('#'+texto).html("");
			}
			break;

		case 'cpf_motorista':
			var texto = id + "Texto";
			if(!validaCPF($('#cpf_motorista').val())){
				$('#'+texto).html("<p class='alert alert-danger'> Você precisa inserir o CPF corretamente</p>");
			}
			else{
				$('#'+texto).html("");
			}
			break;
		default: break;	
	}
}

function verificarCampos(){

	var condicao = true;
	if(!validaNome($('#nome_motorista').val())){
	    $('#nome_motoristaTexto').html("<p class='alert alert-danger'>Você precisa inserir o nome válido</p>");
		condicao = false;
	}
	else{
		$('#nome_motoristaTexto').html("");
	}

    if(!validaData($('#data_motorista').val())){
		$('#data_motoristaTexto').html("<p class='alert alert-danger'> Insira data corretamente</p>");
		condicao = false;
	}
	else{
		$('#data_motoristaTexto').html("");
	}

	if(!validaCPF($('#cpf_motorista').val())){
		$('#cpf_motoristaTexto').html("<p class='alert alert-danger'> Você precisa inserir o CPF corretamente</p>");
		condicao = false;
	}
	else{
		$('#cpf_motoristaTexto').html("");
	}
	if($('#carro_motorista').val() == ""){
		$('#carro_motoristaTexto').html("<p class='alert alert-danger'> Você precisa inserir o modelo do carro</p>");
		condicao = false;
	}
	else{
		$('#carro_motoristaTexto').html("");
	}
	return condicao;
}