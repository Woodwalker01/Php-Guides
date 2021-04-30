<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title></title>
</head>
<body>
   <form method="POST">
     <input type="text" name="diametro" id="diametro" placeholder="diametro" value="0">
     <input type="text" name="altura" id="altura" placeholder="Altura" value="0">
     <input type="submit" name="submit"  value="calculo">
</form>
</body>        
</html>

<?php
if(isset($_POST["submit"])&&!empty($_POST['submit']))(
  $diametro=$_POST['diametro'];
  $altura=$_POST['altura'];

  $radio=$diametro/2;
  $pi=3.1416;
  $volumen=$radio*$radio*$altura*$pi;
  $area=2*$radio*$pi*($radio+$altura);
  echo $volumen. "en centimetros cubicos";
  echo "<br>". $area ."Centimetros cuadrados";
  )
  ?>
  
  
