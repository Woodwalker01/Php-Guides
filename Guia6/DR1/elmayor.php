<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
 <title>Trabajando con funciones de lista variable de
argumentos</title>
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="js/modernizr.custom.lis.js"></script>
 <script src="js/prefixfree.min.js"></script>
 <script src="js/productos.js"></script>

</head>
<body>
<section id="container">
<header>
<nav class="navbar navbar-dark bg-primary ">
<span class="navbar-text mx-auto"><h1>Mayor de una lista de números</h1></span>
</nav>
</header>
<div class="container-fluid">
 <div class="row">
<!--  -->

    <form name="frmproductos" action="elmayor.php" method="POST">
 <fieldset class="form-group">
<legend><span>Ingreso de numeros:</span></legend>
<div class="form-group">
 <label for="producto">Nuevo numero:</label>
 <input type="number" class="formcontrol" name="producto" id="producto" maxlength="60" placeholder="(Ingrese un Numero)" />
 <input type="reset" name="agregar" id="agregar" value="Agreg
ar" class="btn btn-primary" />
</div>
<div class="form-group">
 <label for="ingresados">Numeros ingresados:</label>
 <select name="ingresados[]" class="formcontrol" id="ingresados" size="6" multiple="multiple"></select>
</div>
<input type="submit" name="enviar" id="enviar" value="En
viar" class="btn btn-primary" />
 </fieldset>
</div>
</form>

<!--  -->
<!-- Funcion -->

 <?php
 if(isset($_POST['enviar'])){
     $matriz=array();
    if(isset($_POST['ingresados'])){
        $numeros= isset($_POST['ingresados']);
        $i=0;
            foreach($_POST["ingresados"] as $productos){
                $matriz[$i]=$productos;
                $i++;
                
            }
            echo "<div class='col-sm-6 py-5 px-lg-5 border bg-success'>El
            mayor de los numeros es111: " . "<h2>". max($matriz)."</h2></div>"; 

            echo "<div class='col-sm-6 py-5 px-lg-5 border bg-danger'>El
menor de los numeros es: " .
 "<h2>" . min($matriz) . "</h2></div>"; 
     
        }  

    }
   
 

/* echo "<div class='col-sm-6 py-5 px-lg-5 border bg-danger'>El
mayor de los numeros es: " .
 "<h2>" . parse_ini_string($mayor) . "</h2></div>"; */
    
    function elMayor(){
        $numeros=func_get_args();
        $j=0;
        foreach($numeros as $nums ){
            $mat[$j]=$nums;
            $j++;
        }
        $max=max($mat);
        return $max;
      /*   $mayor=$numeros[0];
        for($i=1; $i<$num_args; $i++){
            $mayor = ($mayor > $numeros[$i]) ? $mayor :
           func_get_arg($i);
            }
            return $mayor;
           */
            } 
     function elMenor(){
         $numeros=func_get_args($matriz);
         $menor=min($numeros);
     }
?>
<?php

?>
 
 </div>
</div>
</section>
</body>
</html>
