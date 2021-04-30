<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,user-scalable=no,initial scale=1.0,maximun-scale=1.0,minimum-scale=1.0"/>
<link rel="stylesheet" href="css/salario.css" />
<link rel="stylesheet" href="css/links.css" />
<script src="js/modernizr.custom.lis.js"></script>
<title>Calcular salario</title>
</head>
<body>
    <header id="inset">
        <h1>Detalle del salario</h1>
    </header>
    <section>
        <article>
            <?php
            if(isset($_POST['enviar'])){
                $Alumno = isset($_POST['Alumno']) ? $_POST['Alumno']:"";
                $notas["Parcial 1"]=isset($_POST['nota1']) ? $_POST['nota1']:"";
                $notas["Parcial 2"]=isset($_POST['nota2']) ? $_POST['nota2']: "";
                $notas["Parcial 3"]=isset($_POST['nota3']) ? $_POST['nota3']: "";
                $ponderacion["Parcial 1"]=$notas["Parcial 1"]*0.5;
                $ponderacion["Parcial 2"]=$notas["Parcial 2"]*0.3;
                $ponderacion["Parcial 3"]=$notas["Parcial 3"]*0.2;
                
                echo "<div>\n<h3>Boleta de pago <h3>\n";
                echo "<table>\n";
                echo "\<tr>\n\t\t<th colspan=\"3\">\n\t\t\tDetalle del pago\n\t\t</th>\n\t</tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\tEl Alumno es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$Alumno,"\n\t\t</td>\n\t\t\t<td class=\"detail\">\n\t\t\tPonderaciones\n\t\t</td></tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\tEl sueldo base es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$notas["Parcial 1"],"\n\t\t</td>\n\t\t\t</td>\n\t\t\t<td class=\"detail\">\n\t\t",$ponderacion["Parcial 1"],"\n\t\t</td></tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\tLas horas extras son: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$notas["Parcial 2"],"\n\t\t</td>\n\t\t\t</td>\n\t\t\t<td class=\"detail\">\n\t\t",$ponderacion["Parcial 2"],"\n\t\t</td></tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\tEl pago por horas extras es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$notas["Parcial 3"],"\n\t\t</td>\n\t\t\t</td>\n\t\t\t<td class=\"detail\">\n\t\t",$ponderacion["Parcial 3"],"\n\t\t</td></tr>\n";
                echo "</table>\n</div>\n";
            }
                ?>
                <a href="salario.html" class ="a-btn">
                 <span class="a-btn-symbol">i</span>
                 <span class="a-btn-text">ingresar</span>
                 <span class="a-btn-slide-text">Otro Alumno</span> 
                 <span class="a-btn-slide-icon"></span>
                 </a>  
        </article>
    </section>
</body>
</html>
