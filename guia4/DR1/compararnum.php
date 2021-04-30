<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet"/>
<link rel="stylesheet" href="css/font.css" />
<link rel="stylesheet" href="css/formstyle.css" />
<script src="js/validar.js"></script>
<title>Potenciador de numeros</title>
</head>
<body>
    
        <header >
            <h1 >
                Resultados de elevar  
                <?php echo $num1=isset($_POST['numero1']) ?$_POST['numero1']:0;?>
            ^
                <?php echo $num2=isset($_POST['numero2']) ?$_POST['numero2']:0;?> es:
            </h1>
        </header>
        <section>
            <article>
               <p class="msg">
            <?php 
            for($i =0;$i<$num2;$i++){
                $pow=$num1*$num1;
            }
            printf("El resultado de la potencia es  es: %d", $pow);
            ?>
            </p>
            </article>
        </section>
</body>
</html>
