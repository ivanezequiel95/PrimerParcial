function Login()
{
	var dni = $('#dni').val();

	var funajax = $.ajax({
	url: 'php/login.php',
	type: 'post',
	data:{
		dnireg:dni
	}
	});
	funajax.done(function(retorno)
	{
		$('#principal').html('<center>Usted esta Logeado :)</center>');
	});
}