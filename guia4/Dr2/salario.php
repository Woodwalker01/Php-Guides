<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,user-scalable=no,initial scale=1.0,maximun-scale=1.0,minimum-scale=1.0"/>
<link rel="stylesheet" href="css/salario.css" />
<link rel="stylesheet" href="css/links.css" />
<script src="js/modernizr.custom.lis.js"></script>
<title>Calcular Tabla de multiplicar</title>
</head>
<body>
    <header id="inset">
        <h1>Tabla de multiplicar</h1>
    </header>
    <section>
        <article>
            <?php
            if(isset($_POST['enviar'])){
                $sueldobase=isset($_POST['sueldobase']) ? $_POST['sueldobase']:"";
                echo "<div>\n<h3> <h3>\n";

                echo "<table>\n";
                echo "<tr>\n\t\t<th colspan=\"2\">\n\t\t\t Tabla del ",$sueldobase,"\n\t\t</th>\n";
                for($i=1;$i<11;$i++){
                    $valor=$sueldobase*$i;
                    echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t",$sueldobase,"x",$i," es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$valor,"\n\t\t</td>\n\t\t\t</tr>\n";
                  
                }
                echo "</table>\n</div>\n";
           
            }
                ?>
                <a href="salario.html" class ="a-btn">
                 <span class="a-btn-symbol">i</span>
                 <span class="a-btn-text">Generar</span>
                 <span class="a-btn-slide-text">Otra Tabla de multiplicar</span> 
                 <span class="a-btn-slide-icon"></span>
                 </a>  
        </article>
    </section>
</body>
</html>
