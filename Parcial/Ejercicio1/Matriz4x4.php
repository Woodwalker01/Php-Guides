<!DOCTYPE html>
<html lang="es">
<head>
 <title>Uso de la función range</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstra
p/4.4.1/css/bootstrap.min.css">'
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.m
in.js"></script>'
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstra
p.min.js"></script>'
</head>
</body>
<div class="container">
<header class='navbar navbar-light bg-light'>
<a class='navbar-brand' class='d-inline-block align-top' href='#'>
 <h4>Generación de series con función de matrices</h4>
</a>
</header>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
   <div class="row">
   <div class="col-md-3">
   <input type="text" name="V0x0"
placeholder="Valor 1x1" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V0x1"
placeholder="Valor x2" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V0x2"
placeholder="Valor 1x3" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V0x3"
placeholder="Valor 1x4" maxlength="18" class="form-control" />
   </div>
</div>
<!-- segunda fila -->
<div class="row">
   <div class="col-md-3">
   <input type="text" name="V1x0"
placeholder="Valor 2x1" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V1x1"
placeholder="Valor 2x2" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V1x2"
placeholder="Valor 2x3" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V1x3"
placeholder="Valor 2x4" maxlength="18" class="form-control" />
   </div>
</div>
<!-- Tercera Fila -->
<div class="row">
   <div class="col-md-3">
   <input type="text" name="V2x0"
placeholder="Valor 3x1" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V2x1"
placeholder="Valor 3x2" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V2x2"
placeholder="Valor 3x3" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V2x3"
placeholder="Valor 3x4" maxlength="18" class="form-control" />
   </div>
</div>
<!-- CUARTA FILA -->
<div class="row">
   <div class="col-md-3">
   <input type="text" name="V3x0"
placeholder="Valor 4x1" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V3x1"
placeholder="Valor 4x2" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V3x2"
placeholder="Valor 4x3" maxlength="18" class="form-control" />
   </div>
   <div class="col-md-3">
   <input type="text" name="V3x3"
placeholder="Valor 4x4" maxlength="18" class="form-control" />
   </div>
</div>
  <!--  -->
 <input type="submit" name="enviar" value="Generar" class="btn btn-primary" />
 <input type="reset" name="limpiar" value="Cancelar" class="btn btn-primary" />
</form>
<?php

 if(isset($_POST['enviar'])){
$sumaH=array(0,0,0,0);
$sumaV=array(0,0,0,0);
$vf1=array(0,0,0,0);
$vf2=array(0,0,0,0);
$vf3=array(0,0,0,0);
$vf4=array(0,0,0,0);



 for($i=0;$i<4;++$i)
    { 
      for($j=0;$j<4;++$j){
          $matriz[$i][$j]=$_POST["V{$i}x{$j}"] ;
          if(isset($matriz[$i][$j])){
          $sumaH[$i]+=$matriz[$i][$j]??0;
          $sumaV[$i]+=$matriz[$j][$i]??0; 
  }
    }
    } 
 /* VALOR MAXIMO */
$b = 0;
$x=0;
$y=0;
for($i=0;$i<4;$i++)
{
	for($j=0;$j<4;$j++)
	{
		if ( $matriz[$i][$j] > $b)
	 	{
        $b =  $matriz[$i][$j];
        $x=$i+1;
        $y=$j+1;
    	}
	}   	
}
/* VALOR MAXIMO FIN */
/* VALOR MINIMO */
$c = 0;
$m=0;
$n=0;
for($i=0;$i<4;$i++)
{
	for($j=0;$j<4;$j++)
	{
		if ( $matriz[$i][$j] < $c)
	 	{
        $c =  $matriz[$i][$j];
        $m=$i+1;
        $n=$j+1;
    	}
	}   	
}
/*  */
$minv=min($sumaV);
$minh=min($sumaH);

$fila=0;
$col=0;
for($i=0;$i<4;++$i){
    if($minh==$sumaH[$i]){
        $col=$i+1;
    }
}
for($i=0;$i<4;++$i){
    if($minv==$sumaV[$i]){
        $fila=$i+1;
    }
}

    echo "<h1>La fila que tuvo la menor suma es {$col}  </h1>"; 
    echo "<h1>La Columna que tuvo la menor suma es {$fila} </h1>"; 
    echo "<h1>El valor mayor es: {$b} en la posicion [{$x},{$y}]</h1>"; 
    echo "<h1>El valor menor es: {$c} en la posicion [{$m},{$n}] </h1>"; 

 }
?>
</div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></
script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/formoid-solid-purple.js"></script>
</html>