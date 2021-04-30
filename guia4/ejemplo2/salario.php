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
                $empleado = isset($_POST['empleado']) ? $_POST['empleado']:"";
                $sueldobase=isset($_POST['sueldobase']) ? $_POST['sueldobase']:"";
                if(isset($_POST['hextra'])){
                    $horasextras=isset($_POST['numhorasex']) ? $_POST['numhorasex']: "0";
                    $pagohextra=isset($_POST['pagohextra']) ? $_POST['pagohextra']: "0";
                    $sueldohextras= $horasextras*$pagohextra;
                }
                else{
                    $horasextras=0;
                    $sueldohextras=0;
                }
                $sueldoneto= $sueldoneto+$sueldohextras;
                echo "<div>\n<h3>Boleta de pago <h3>\n";
                echo "<table>\n";
                echo "\<tr>\n\t\t<th colspan=\"2\">\n\t\t\tDetalle del pago\n\t\t</th>\n\t</tr>\n";
                echo "\tr<tr>\n\t\t<td>\n\t\t\tEl empleado es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$empleado,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\tr<tr>\n\t\t<td>\n\t\t\tEl sueldo base es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$sueldobase,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\tr<tr>\n\t\t<td>\n\t\t\tLas horas extras son: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$horasextras,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\tr<tr>\n\t\t<td>\n\t\t\tEl pago por horas extras es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$sueldohextras,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\tr<tr>\n\t\t<td>\n\t\t\tEl sueldo neto devengado es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$sueldoneto,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "</table>\n</div>\n";
            }
                ?>
                <a href="salario.html" class ="a-btn">
                 <span class="a-btn-symbol">i</span>
                 <span class="a-btn-text">ingresar</span>
                 <span class="a-btn-slide-text">Otro empleado</span> 
                 <span class="a-btn-slide-icon"></span>
                 </a>  
        </article>
    </section>
</body>
</html>
