<?php 
session_start();
if (!isset($_SESSION['dnireg'])) 
{
?>
<div>
	<form onsubmit='return false;' id='FormIngreso'>
		<center>
		<input type='number' placeholder='Ingrese su DNI' min='1000000' max='99000000' length='9' id='dni'>
		<br>
		<button onclick='Login()' type='submit' class='MiBotonUTNMenu' style='width: 10%;'>Enviar</button>
		</center>
	</form>
</div>
<?php
}else
{
?>

<center>
	<p>Usted ya esta logueado.</p>
</center>

<?php  
}
?>