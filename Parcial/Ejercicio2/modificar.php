<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <title>Modificar un libro</title>
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min. css" rel="stylesheet" id="bootstrap-css">
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js "></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
 <link rel="stylesheet" href="css/links.css" />
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="container">
 <header>
 <nav class="navbar navbar-dark bg-primary">
 <span class="navbar-text">
 <h1>Modificar libro</h1>
 </span>
 </nav>
 </header>
 <section>
 <article> <?php
 //Creando una nueva instancia del objeto de conexión
 //a la base de datos
 @$db = new mysqli('localhost', 'root', '','Productos');
 //@$db = new mysqli('localhost','tecnologico','fetudb','libros');
 if (mysqli_connect_errno()) {
 $msgerror = "Error: no se puede conectar a la base de datos";
 $msgerror .= "Contacte con soporte para resolver el problema";
 echo $msgerror;
 exit(0);
 } //Establecer el conjunto de caracteres a utf8 $db->set_charset("utf8");
 //Haciendo una consulta de todos los librospresentes
 //en la tabla libros
 $consulta = "SELECT * FROM Productos WHERE idcodigo='" . $_GET['id'] . "'";
 //echo $consulta . "<br>\n";
 //Ejecutando la consulta a través del objeto$db
 $resultc = $db->query($consulta);
 //Obteniendo el número de registros devueltos
 $num_results = $resultc->num_rows;
 $row = $resultc->fetch_assoc(); ?>
 <form action="mostrarlibros.php?id=
 <?php
 echo $_GET['id']
?>" method="POST" class="formoidsolid-purple">




 <div class="element-number form-group">
 <label class="title"></label>
 <div class="item-cont">
 <input type="text" class="form-control"
name="Nombreproducto" value="<?php echo $row['nombreproducto'] ?>" maxlength="18"
placeholder="Nombre del Producto" class="large" /> <span
class="icon-place"></span> </div>
 </div>
 <div class="element-name form-group"> <label
class="title"></label>
 <div class="nameFirst"> <input
class="form-control" type="text" name="categoria" value="<?php echo
$row['categoria'] ?>" maxlength="50" placeholder="categoria" class="large"
/> <span class="icon-place"></span> </div>
 </div>
 <div class="element-number form-group"> <label
class="title"></label>
 <div class="item-cont"> <input
class="form-control" type="text" name="precio" value="<?php echo
$row['precio'] ?>" maxlength="8" placeholder="Precio"
class="large" /> <span class="icon-place"></span> </div>
 </div>
 <div class="element-input form-group"> <label
class="title"></label>
 <div class="item-cont"> <input
class="form-control" type="text" name="Existencia" value="<?php echo
$row['Existencia'] ?>" maxlength="70" placeholder="Existencia"
class="large" /> <span class="icon-place"></span> </div>
 </div>
 
 <div class="element-input form-group"> <label
class="title"></label>
 <div class="item-cont"> <input
class="form-control" type="date" name="FechaIngreso" value="<?php echo
$row['FechaIngreso'] ?>" placeholder="FechaIngreso"
class="large" /> <span class="icon-place"></span> </div>
 </div>

 <div > <input type="submit" class="btn btn-primary" name="guardar" value="Guardar" /> </div>
 </form>
 <!-- <form action="mostrarlibros.php?id=
 <?php echo $_GET['id'] ?>" method="POST">
 <fieldset> <legend><span>Modificar la información de
un libro</span>
 </legend>
 <ul>
 <li>
 <label for="isbn" class="item">ISBN: </label>
 <div class="campo">
 <input type="text" name="isbn" value="<?php
echo $row['categoria'] ?>" size="18" maxlength="18" placeholder="ISBN"
/>
 </div>
 </li>
 <li>
 <label for="autor" class="item">Autor: </label>
 <div class="campo">
 <input type="text" name="autor" value="<?php
echo $row['Nombreproducto'] ?>" size="36" maxlength="50"
placeholder="Autor" />
 </div>
 </li>
 <li>
 <label for="titulo" class="item">Título: </label>
 <div class="campo">
 <input type="text" name="titulo" value="<?php
echo $row['FechaIngreso'] ?>" size="36" maxlength="60"
placeholder="T&iacute;tulo" />
 </div> </li> <li>
 <label for="precio" class="item">Precio:
</label>
 <div class="campo">
 <input type="text" name="precio"
value="<?php echo $row['precio'] ?>" size="6" maxlength="6"
placeholder="Precio" />
 </div>
 </li>
 <li>
 <div class="boton">
 <input type="submit" name="guardar" value="Guardar"
/> </div> </li> </ul> </fieldset> </form> -->
 <hr class="d-lg-none divider">
 <a href="mostrarlibros.php?opc=modificar"
class="d-block h3 font-weight-normal">Volver<br>
<small class="d-block text-muted text-small">a la
tabla de modificación</small>
 </a>
 </article>
 </section>
</body>
</html>
