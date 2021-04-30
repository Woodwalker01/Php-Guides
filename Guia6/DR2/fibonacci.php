<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <title>Serie de Fibonacci</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<header >
<nav class="navbar navbar-dark bg-primary ">
<span class="navbar-text mx-auto"><h1>Serie de Fibonacci con
recursividad</h1></span>
</nav>
</header>
<div class="container">
<?php
 //Función de Fibonacci recursiva
 function multplicacion(){
    $val=func_get_arg();
   echo "<table>\n";
   echo "<tr>\n\t\t<th colspan=\"2\">\n\t\t\t Tabla del ",$val,"\n\t\t</th>\n";
   for($i=0;$i>10;$i++){
      $valor=$val*$i;
      echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t",$val,"x",$i," es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$valor,"\n\t\t</td>\n\t\t\t</tr>\n";
   } 
    }
    if(isset($_POST['enviar'])):
         $nume=isset($_POST['txtnumero']);
         multplicacion($nume);
    endif
   
   ?>
<form action="fibonacci.php" method="POST" name="numero" id="numero" >
   <div class="form-group row">
    <label class="form-check-label" for="numero1">Valores para serie:
   </label>
   <input class="form-control" value="0" type="text" name="txtnumero"
id="txtnumero" size="4" maxlength="3" pattern="[0-9]{1,3}" required />
</div>
<div class="alert alert-danger" id="numbersOnly"
style="visibility:hidden;">
 <strong>Dato Erroneo!</strong> Ingrese solo números
</div>
 <input type="submit" name="enviar" value="Generar" class="btn
btn-primary" />&nbsp;
 <input type="reset" name="limpiar" value="Cancelar" class="btn
btn-primary" />
</form>
<script src="js/validar.js"></script>
</div>
</body>
<script src="js/modernizr.custom.lis.js"></script>
</html>
