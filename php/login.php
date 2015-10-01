<?php 
session_start();

$_SESSION['dnireg'] = $_POST['dnireg'];

echo $_POST['dnireg'];
?>