<?php
session_start();
$valor = $_POST['valorBusqueda'];
$pattern = "/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ'])?$/";
if (preg_match($pattern, $valor)) {
	echo '<i class="fas fa-check-circle" id="good"></i> Verificación exitosa';
	$_SESSION["func1"] = true;
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> Verificación ha fallado';
	$_SESSION["func1"] = false;
}
?>