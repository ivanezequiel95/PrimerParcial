function MostrarFormIngreso()
{
	var funajax = $.ajax({
	url: 'partes/FormIngreso.php'
	});
	funajax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}

function MostrarFormVotacion()
{
	var funajax = $.ajax({
	url: 'partes/FormVotacion.php'
	});
	funajax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}

function MostrarGrilla()
{
	var funajax = $.ajax({
	url: 'partes/GrillaVotos.php'
	});
	funajax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}

