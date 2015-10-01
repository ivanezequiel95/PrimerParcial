function Alta()
{
	var provincia = $('#provincia').val();
	var candidato = $('#candidato').val();
	var sexo = $('#sexo').val();

	var funajax = $.ajax({
	url: 'nexo.php',
	type: 'post',
	data:{
		queHacer:'Alta',
		provincia:provincia,
		candidato:candidato,
		sexo:sexo
	}
	});
	funajax.done(function(retorno)
	{
		$('#principal').html('Alta satisfactoria');
	});
}