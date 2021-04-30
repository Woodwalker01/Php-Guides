<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"> 
 <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <title>Venta de autos</title>
 <!--[if lt IE 9]>
 <script
src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>
<body>
<div class="container">
<header>
 <h1>Autos disponibles </h1>
 <form action="<?=$_SERVER['PHP_SELF']; ?>" method="POST" class="formoidsolid-purple">
 <div class="form-group">

<select name ="Sautos">
<option value="Peugot">Peugot</option>
<option value="Renault">Renault</option>
<option value="BMW">BMW</option>
<option value="Toyota" >Toyota</option>
<option value="Honda" >Honda</option>
</select>
<div class="submit">
<input type="submit" name="enviar" value="Enviar" class="btn btnprimary" />
 </div>
 </form>
</header>
</div>
<div class="row">
<?php
 //Incluyendo el archivo de clase
 /* function _autoload($classname) {
 include_once("class/" . $classname . ".class.php");
 } */
 spl_autoload_register(function ($classname){
     include ($classname . ".class.php");
 });
 if(isset($_POST['enviar'])){
     $movil=array("","","","");
 switch($_POST['Sautos']){
    case 'Peugot':
        $movil[0] = new auto("Peugeot", "307", "Gris","img/peugeot.jpg");
        $movil[0]->mostrar();
        break;
    case 'Renault':
        $movil[1] = new auto("Renault", "Clio", "Rojo","img/renaultclio.jpg");
        $movil[1]->mostrar();
        break;
    case 'BMW':
        $movil[2] = new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
        $movil[2]->mostrar();
    break;
    case 'Toyota':
        $movil[3] = new auto("Toyota", "Avalon", "Blanco","img/toyota.jpg");
        $movil[3]->mostrar();
        break;
        case 'Honda':
            $movil[4] = new auto();            
            $movil[4]->mostrar();
            break;
    default:
        // Something went wrong or form has been tampered.
    }
}
 //Creando los objetos para cada tipo de auto. Notar que se están
 //asignando a elementos de una matriz que tendrá por nombre $movil+

 $movil[0] = new auto("Peugeot", "307", "Gris","img/peugeot.jpg");
 $movil[1] = new auto("Renault", "Clio", "Rojo","img/renaultclio.jpg");
 $movil[2] = new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
 $movil[3] = new auto("Toyota", "Avalon", "Blanco","img/toyota.jpg");
 //Esta llamada mostrará los valores por defecto en los argumentos
 //del método constructor.
/*  $movil[4] = new auto();
 //Mostrando la tabla con los autos disponibles
 for($i=0; $i<count($movil); $i++){
 $movil[$i]->mostrar();
 } */
?>
</div>
</div>
</body>
</html>
