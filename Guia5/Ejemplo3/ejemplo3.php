<!DOCTYPE html>
<html lang="es">
<head>
 <title>Listado de productos</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstra
p/4.4.1/css/bootstrap.min.css">'
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.m
in.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstra
p.min.js"></script>
 <script src="js/productos.js"></script>
</head>
<body>
 <div class="container">
<form name="frmproductos" action="productos.php" method="POST">
 <fieldset class="form-group">
<legend><span>Ingreso de productos:</span></legend>
<div class="form-group">
 <label for="producto">Nuevo producto:</label>
 <input type="text" class="formcontrol" name="producto" id="producto" maxlength="60" placeholder="(Ingrese un producto)" />
 <input type="reset" name="agregar" id="agregar" value="Agregar" class="btn btn-primary" />
</div>
<div class="form-group">
 <label for="ingresados">Productos ingresados:</label>
 <select name="ingresados[]" class="formcontrol" id="ingresados" size="6" multiple="multiple"></select>
</div>
<input type="submit" name="enviar" id="enviar" value="En
viar" class="btn btn-primary" />
 </fieldset>
</div>
</form>
</div>
</body>
</html>