<?php
session_start();  
require_once('../clases/ClaseVoto.php');
if (isset($_SESSION['dnireg'])) 
{
?>

<table class='table' style="width:90%;">
	<tr>
		<th>Provincia</th>
		<th>Candidato</th>
		<th>Sexo</th>
		<th>Localidad</th>
		<th>Direccion</th>
		<th>Modificar</th>
		<th>Borrar</th>
		<th>Ver en Mapa</th>
	</tr>
<?php
	$array_votos = Voto::TraerTodos();
	if ($array_votos != NULL)
	{
	  	foreach ($array_votos as $item) 
		{
			echo "<tr>
					<td>$item->provincia</td>
					<td>$item->candidato</td>
					<td>$item->sexo</td>
					<td>$item->localidad</td>
					<td>$item->direccion</td>
					<td><button onclick='' class='MiBotonModificar'>Modificar</button></td>
					<td><button onclick='' class='MiBotonBorrar'>Borrar</button></td>
					<td><button onclick='VerEnMapa(\"$item->provincia\", \"$item->direccion\", \"$item->localidad\", \"$item->dni\")' class='MiBotonUTN'>Ver en Mapa</td>
				</tr>";
		}
	}
	else
	{
		echo "<tr>
				<td colspan='8'>No hay datos en la base de datos.</td>
			</tr>";
	}
?>
</table>

<?php
}else
{
?>

<center>No estas registrado pilluelo.</center>

<?php  
}
?>