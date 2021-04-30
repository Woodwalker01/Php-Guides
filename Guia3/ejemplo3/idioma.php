<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,user-scalable=no,initial scale=1.0,maximun-scale=1.0,minimum-scale=1.0"/>
<meta http-equiv="Content-script-type" content="text/javascript" />
 <link rel="stylesheet" href="css/idioma.css" />
<title>Detector del lenguaje del navegador</title>
</head>
<body>
    <div id="wrapper">
        <header id="inset">
            <h1 class="emboss">Idioma del navegador</h1>
        </header>
        <section>
<?php
$espanol="hola";
$ingles="hello";
$aleman="Hallo";
$frances="Bonjour";
$italiano="Ciao";
$portugues="Olá";
$completo = $_SERVER["HTTO_ACCEPT_LANGUAGE"];
$idioma=substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
echo "<p>" . $completo . "<br>";
echo $idioma."</p>\n";
if($idioma =="es"){
    echo '<p class="msgOff">';
    printf ("El lenguaje que se esta utilizando en el navegador es el Español: %s <p>\n",$espanol);
}
elseif($idioma=="fr"){
    echo '<p class="msgOff">';
    printf ("El lenguaje que se esta utilizando en el navegador es el Frances: %s <p>\n",$frances);
}
elseif($idioma=="en"){
    echo '<p class="msgOff">';
    printf ("El lenguaje que se esta utilizando en el navegador es el Ingles: %s <p>\n",$ingles);
}
elseif($idioma=="de"){
    echo '<p class="msgOff">';
    printf ("El lenguaje que se esta utilizando en el navegador es el Español: %s <p>\n",$aleman);
}
elseif($idioma=="it"){
    echo '<p class="msgOff">';
    printf ("El lenguaje que se esta utilizando en el navegador es el italiano: %s <p>\n",$italiano);
}
elseif($idioma=="pt"){
    echo '<p class="msgOff">';
    printf ("El lenguaje que se esta utilizando en el navegador es el Portugues: %s <p>\n",$portugues);
}
else{
    echo '<p class="msgOff">';
    echo "El idioma del navegador es desconocido.</p>\n";
}
?>
        </section>
    </div>
    
    
</body>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/switchclass.js"></script>

</html>
