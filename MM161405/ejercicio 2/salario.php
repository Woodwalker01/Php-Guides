<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,user-scalable=no,initial scale=1.0,maximun-scale=1.0,minimum-scale=1.0"/>
<link rel="stylesheet" href="css/salario.css" />
<link rel="stylesheet" href="css/links.css" />
<script src="js/modernizr.custom.lis.js"></script>
<title>Cajero automatico</title>
</head>
<body>
    <header id="inset">
        <h1>Su dinero viene dado de la siguiente forma</h1>
    </header>
    <section>
        <article>
            <?php
            if(isset($_POST['enviar'])){
                $retiro=isset($_POST['Retiro']) ? $_POST['Retiro']:"";
              if($retiro==450){
                  $de100=4;
                  $de50=1;
                  $de20=0;
                  $de10=0;
                  $de5=0;
                  $de1=0;
              }
             
              elseif($retiro==75){
                $de100=0;
                $de50=1;
                $de20=1;
                $de10=0;
                $de5=1;
                $de1=0;
              }
              elseif($retiro==17){
                $de100=0;
                $de50=0;
                $de20=0;
                $de10=1;
                $de5=1;
                $de1=2;
              }
              $total=$de100*100+$de50*50+$de20*20+$de10*10+$de5*5+$de1*1;
                echo "<div>\n<h3> <h3>\n";
                echo "<table>\n";
                echo "<tr>\n\t\t<th colspan=\"2\">\n\t\t\t Retiro de ",$modulo,"\n\t\t</th>\n";
                    echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t"," cantidad de 100: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$de100,"\n\t\t</td>\n\t\t\t</tr>\n";
                    echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t"," cantidad de 50: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$de50,"\n\t\t</td>\n\t\t\t</tr>\n";
                    echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t"," cantidad de 20: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$de20,"\n\t\t</td>\n\t\t\t</tr>\n";
                    echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t"," cantidad de 10: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$de10,"\n\t\t</td>\n\t\t\t</tr>\n";
                    echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t"," cantidad de 5: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$de5,"\n\t\t</td>\n\t\t\t</tr>\n";
                    echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t"," cantidad de 1: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$de1,"\n\t\t</td>\n\t\t\t</tr>\n";
                    echo "<tr>\n\t\t<td class=\"detail\"    >\n\t\t\t"," TOTAL: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$total,"\n\t\t</td>\n\t\t\t</tr>\n";


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
