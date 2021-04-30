<?php
session_start();
$valor = $_POST['valorBusqueda'];
$pattern = "/[A-Za-z1-9]+@[a-z1-9]+\.[a-z]+/";
if (preg_match($pattern, $valor)) {
	echo '<i class="fas fa-check-circle" id="good"></i> verificación exitosa';
	$_SESSION["func4"] = true;
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
	$_SESSION["func4"] = false;
}
?>