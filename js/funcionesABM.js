function Alta()
{
	var provincia = $('#provincia').val();
	var candidato = $('#candidato').val();
	var sexo = $('#sexo').val();
	var localidad = $('#localidad').val();
	var direccion = $('#direccion').val();

	var funajax = $.ajax({
	url: 'nexo.php',
	type: 'post',
	data:{
		queHacer:'Alta',
		provincia:provincia,
		candidato:candidato,
		sexo:sexo,
		localidad:localidad,
		direccion:direccion
	}
	});
	funajax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}