<?php  
session_start();
if (isset($_SESSION['dnireg'])) 
{
?>

<div class='CajaUno'>
	<form onsubmit='return false;'>
		<input type='text' placeholder='Ingrese Provincia' id='provincia'>
		<select id='candidato'>
			<option value="Scioli">Scioli</option>
			<option value="Macri">Macri</option>
			<option value="Massa">Massa</option>
		</select>
		<input type='radio' name='sexo' id='sexo' value='Femenino' checked>Masculino
		<br>
		<input type='radio' name='sexo' id='sexo' value='Femenino'>Femenino
		<input type='text' placeholder='Ingrese localidad' id='localidad'>
		<input type='text' placeholder='Ingrese direccion' id='direccion'>
		<button onclick='Alta()' class='MiBotonUTN'>Votar :)</button>
	</form>
</div>


<?php  
}
else
echo "<center>Primero registrate salamin.</center>";
?>
