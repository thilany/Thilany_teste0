$(document).ready(function(){
	$('#vr_corrida').change(function(){
		if(validaDinheiro($('#vr_corrida').val())){
			$('#vr_corridaTexto').html("");
		}
		else{
			$('#vr_corridaTexto').html("<p class='alert alert-danger'>Você precisa inserir um valor válido</p>");
		}
	});

	$('#btnCorridas').click(function(){
		if(validaDinheiro($('#vr_corrida').val())){
			$('#vr_corridaTexto').html("");
		}
		else{
			$('#vr_corridaTexto').html("<p class='alert alert-danger'>Você precisa inserir um valor válido</p>");
			event.preventDefault();
		}
	});
});