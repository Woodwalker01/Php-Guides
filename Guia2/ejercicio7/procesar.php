<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width,user-scalable=no,initial scale=1.0,maximun-scale=1.0,minimum-scale=1.0"/>
 <meta charset="UTF-8">
 <link rel="stylesheet" media="screen" href="css/forms.css">
 <script src="js/modernizr.custom.lis.js"></script>
 <script src="js/validar.js"></script>
 <title>Informacion Recibida</title>
 <link rel="stylesheet" href="css/tables.css"/>
 <link rel="stylesheet"  href="http://fonts.googleapis.com/css?family=Nobile"/>
 <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
<section>
<article>
    <div id="info">
        <table id="hor-zebra" sumary="Datos Recibidos del formulario">
            <caption> Informacion de formulario</caption>
            <thead>
                <tr class = "thead">
                    <th scope="col">Campo</th>
                    <th scope="col">Valor</th>
                </tr>
                </thead>
            </thead>
            <tbody>
                <?php
              if(isset($_POST['submit'])&& $_POST['submit'] == "Enviar"):
                echo "\t<tr class=\"odd\">\n";
                echo "\t\t<td>\nCliente\n</td>\n";
                extract($_POST);
                $cliente = !empty($client) ? $client: "<a href=\"ingresodatos.html\">No Ingreso el cliente.</a>";
                echo "\t\t<td>\n". $cliente . "\n</td>\n";
                echo "\t</tr>\n";
                echo "\t<tr>\n";
                echo "\t\t<td>\nProducto\n</td>\n";
                $producto = !empty($product) ? $product: "<a href=\"ingresodatos.html\">No Ingreso el producto.</a>";
                echo "\t\t<td>\n". $producto . "\n</td>\n";
                echo "\t</tr>\n";
                echo "\t<tr>\n";
                echo "\t\t<td>\nPrecio\n</td>\n";
                $precio = !empty($price) ? $price: "<a href=\"ingresodatos.html\">No Ingreso el precio.</a>";
                echo "\t\t<td>\n". $precio . "\n</td>\n";
                echo "\t</tr>\n";
                echo "\t<tr>\n";
                echo "\t\t<td>\nCantidad\n</td>\n";
                $cantidad = !empty($quantity) ? $quantity: "<a href=\"ingresodatos.html\">No Ingreso la cantidad.</a>";
                echo "\t\t<td>\n". $cantidad . "\n</td>\n";
                echo "\t</tr>\n";
                    echo "\t<tr class=\"odd\">\n";
                    echo "\t\t<td>\nTotal a pagar\n</td>\n";
                    if(isset($cliente) && isset($product) && floatval($precio)>0 &&
                    floatval($cantidad)>0):
                    echo "\t<td>\$". number_format($precio*$cantidad,2,'.',',') . "\n</td>\n";
        else:
    echo "\t<td>\nNada que Cobrar\n</td>\n";
endif;
echo "\t</tr>\n";
else:
    echo "\t<tr class=\"odd\">\n";
    echo "\t\t<td> NO se han ingresado datos desde el formulario.</td>";
    echo "\t</tr>\n";
endif;
          ?>
            </tbody>
</table>
<div id="link">
    <a href="ingresodatos.html" class="button-link">Ingresa Nuevos datos</a>
</div>
</div>
</article>
</section>
</body>
</html>
