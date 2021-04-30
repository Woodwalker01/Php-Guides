<!DOCTYPE html>
<html lang="es">
<head>
 <title>Productos de la tienda</title>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">'
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>'
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>'
 <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
<section>
<article>
<table class='table table-bordered'>
 <thead>
<th class="head">Productos</th>
 </thead>
 <tbody>
<?php
if(isset($_POST['enviar'])){
 if(isset($_POST['ingresados'])){
foreach($_POST["ingresados"] as $productos){
 echo "<tr>\n<td>$productos</td>\n</tr>";
}
 }
 if(isset($_POST['notas1'])){
    foreach($_POST["notas1"] as $nota1){
     echo "<tr>\n<td>$nota1</td>\n</tr>";
    }
     }
}
?>
 </tbody>
</table>
</article>
</section>
</body>
</html>