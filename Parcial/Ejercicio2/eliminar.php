<?php @$db = new mysqli('localhost', 'root', '', 'Productos');
//@$db = new mysqli('localhost','tecnologico','fetudb','libros');
//Establecer el conjunto de caracteres a utf8
 $db->set_charset("utf8");
if (mysqli_connect_errno()) {
 $msgerror = "Error: no se puede conectar a la base de datos";
 $msgerror .= "Contacte con soporte para resolver el problema";
 echo $msgerror;
 exit(0);
}
$idcodigo = $_GET['id'];
$sql = "SELECT * FROM Productos WHERE idcodigo = '" . $idcodigo . "'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$msg = "<script text=\"text/javascript\">\n";
$preg = "Deseas eliminar el Producto de: isbn = ";
$preg .= "idcodigo = " . $row['idcodigo'] . ",";
$preg .= "nombreproducto = " . $row['nombreproducto'] . ",";
$preg .= "categoria = " . $row['categoria'] . ",";
$preg .= "precio = " . $row['precio'] . ".";
$preg .= "Existencia = " . $row['Existencia'] . ".";
$preg .= "Fecha= " . $row['FechaIngreso'] . ".";
$msg .= "if(confirm(\"" . $preg . "\")){";
$msg .= "location.href=\"mostrarlibros.php?opc=eliminar&del=s&id=". $idcodigo . "\";}";
$msg .="else{location.href=\"mostrarlibros.php?opc=eliminar&del=n\";}</script>";
echo utf8_decode($msg);
