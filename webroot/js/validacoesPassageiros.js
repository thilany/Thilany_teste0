$(document).ready(function(){
	$('#cpf_passageiro').mask("999.999.999-99");
	$('#data_passageiro').mask("99/99/9999");

	//validações
	$('.passageiros').change(function(){
		var id = $(this).attr('id');
		validacaoPassageiro(id);
	});

	$('#btnPassageiros').click(function(){
		if(!verificarCampos()){
			event.preventDefault();
		}		
	});
});

function validacaoPassageiro(id){
	switch(id){
		case 'nome_passageiro': 
			var texto = id + "Texto";
			if(!validaNome($('#nome_passageiro').val())){
	      		$('#'+texto).html("<p class='alert alert-danger'>Você precisa inserir o nome válido</p>");
			}
      		else{
      			$('#'+texto).html("");
      		}
			break;

		case 'data_passageiro':
			var texto = id + "Texto";
			if(!validaData($('#data_passageiro').val())){
				$('#'+texto).html("<p class='alert alert-danger'> Insira data corretamente</p>");
			}
			else{
				$('#'+texto).html("");
			}
			break;

		case 'cpf_passageiro':
			var texto = id + "Texto";
			if(!validaCPF($('#cpf_passageiro').val())){
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
	if(!validaNome($('#nome_passageiro').val())){
	    $('#nome_passageiroTexto').html("<p class='alert alert-danger'>Você precisa inserir o nome válido</p>");
		condicao = false;
	}
	else{
		$('#nome_passageiroTexto').html("");
	}

    if(!validaData($('#data_passageiro').val())){
		$('#data_passageiroTexto').html("<p class='alert alert-danger'> Insira data corretamente</p>");
		condicao = false;
	}
	else{
		$('#data_passageiroTexto').html("");
	}

	if(!validaCPF($('#cpf_passageiro').val())){
		$('#cpf_passageiroTexto').html("<p class='alert alert-danger'> Você precisa inserir o CPF corretamente</p>");
		condicao = false;
	}
	else{
		$('#cpf_passageiroTexto').html("");
	}

	return condicao;
}