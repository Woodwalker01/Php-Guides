<?php
session_start();
$valor = $_POST['valorBusqueda'];
$pattern = "/[6-7][0-9]{3}+\-[0-9]{4}+\z|[2][0-9]{3}+\-[0-9]{4}+\z/";
if (preg_match($pattern, $valor)) {
	echo '<i class="fas fa-check-circle" id="good"></i> verificación exitosa';
	$_SESSION["func3"] = true;
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
	$_SESSION["func3"] = false;
}
?>