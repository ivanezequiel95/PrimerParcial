<?php  
session_start();

require_once('clases/ClaseVoto.php');

$queHacer = $_POST['queHacer'];

switch ($queHacer) 
{
	case 'Alta':
		$voto = new Voto();
		$voto->dni = $_SESSION['dnireg'];
		$voto->provincia = $_POST['provincia'];
		$voto->candidato = $_POST['candidato'];
		$voto->sexo = $_POST['sexo'];
		$voto->localidad = $_POST['localidad'];
		$voto->direccion = $_POST['direccion'];
		$voto->Alta();
		break;
	case 'VerEnMapa':
		include('partes/FormMapaGoogle.php');
		break;
	default:
		break;
}

?>