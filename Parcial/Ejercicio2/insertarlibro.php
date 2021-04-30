<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <title>Resultados al agregar libro</title>
 <link
href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.
css" rel="stylesheet" id="bootstrap-css">
 <script
src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script
src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><
/script>
 <link rel="stylesheet" href="css/links.css" /> <!-- <link
rel="stylesheet" href="css/libros.css" /> -->
 <script src="js/modernizr.custom.lis.js"></script>
</head>
<body class="container">
 <header>
 <nav class="navbar navbar-dark bg-primary">
 <span class="navbar-text">
 <h1>Resultado al agregar libro a la base de
datos</h1>
 </span>
 </nav>
 </header>
 <section>
 <article>
 <?php
 //Asignando los datos del formulario
 //a variables locales con nombres cortos
 $nombreprod = trim($_POST['NombreProducto']);
 $categoria = trim($_POST['Categoria']);
 $Existencia = trim($_POST['Existencia']);
 $precio = trim($_POST['precio']);
 $Fecha = trim($_POST['Fecha']);
 //Verificando que se hayan ingresado datos
 //en todos los controles del formulario
 if (empty($nombreprod) || empty($categoria) || empty($Existencia) ||
empty($precio)|| empty($Fecha)) {
 $msg = "Existen campos en el formulario sin
llenar. ";
 $msg .= "Regrese al formulario y llene todos los
campos. <br />\n";
$msg .= "[<a
href=\"nuevolibro.html\">Volver</a>]\n";
 echo $msg;
 exit(0);
 }
/*  if (!get_magic_quotes_gpc()) {
 */
 $nombreprod = addslashes($nombreprod);
 $categoria = addslashes($categoria);
 $Existencia = addslashes($Existencia);
 $precio = doubleval($precio);
 $Fecha = addslashes($Fecha);
 
/*  } */
 //Conectando con el servidor MySQL y seleccionando
 //la base de datos con la que se trabajará
 @$db = new mysqli('localhost', 'root', '','productos');
 //@$db = newmysqli('localhost','tecnologico','fetudb','libros');
 //Establecer el conjunto de caracteres a utf8
 $db->set_charset("utf8");
 if (mysqli_connect_errno()) {
 $msgerror = "No se ha logrado conectar a la base
de datos. ";
 $msgerror .= "Reporte el problema al
administrador.";
 echo $msgerror;
 exit(0);
 }
 //Realizando la consulta para insertar
 //el nuevo registro a la base de datos
 $fechaformat = date("Y-m-d", strtotime($Fecha));
 $planconsulta = "INSERT INTO Productos (nombreproducto, Categoria, precio,Existencia,FechaIngreso) ";
 $planconsulta .= "VALUES (?, ?, ?, ?,?)";
 $sentencia = $db->prepare($planconsulta);
 $sentencia->bind_param("ssiid", $nombreprod, $categoria, $precio,$Existencia, $fechaformat);
 $sentencia->execute();
 echo "<div class=\"query\">\n\t<p>\n\t\t";
 echo $sentencia->affected_rows . " productos(s)
agregado(s) a la base de datos\n";
 echo "</p>\n</div>\n";
 $sentencia->close();
 /*
 $consulta = "INSERT INTO libros (isbn, autor, titulo, precio)
";
 $consulta .= "VALUES ('" . $isbn . "', '" . $autor . "', '" .
$titulo . "', " . $precio . ")";
 $resultc = $db->query($consulta);
 if($resultc){
 echo $db->affected_rows . " libro agregado a la base de
datos."; } */
 //Cerrar la conexión
 $db->close(); ?> <br />
 <hr class="d-lg-none divider">
 <section class="m-b-30 m-t-30">
 <div class="row pager">
 <div class="col-md-6 text-left">
 <a href="menuopciones.html" class="d-block
h3 font-weight-normal">Regresar<br>
 <small class="d-block text-muted
text-small">Menu</small>
 </a>
 </div>
 <div class="col-md-6 text-right">
 <a href="nuevolibro.html" class="d-block
h3 font-weight-normal">
 Agregar<br>
 <small class="d-block text-muted
text-small">Otro libro</small>
 </a>
 </div>
 </div>
</section>
 </section>
</body>
</html>
