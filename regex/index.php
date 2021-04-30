<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery.js"></script>
    <title>Becas "N de Nayib"</title>
    <script src="https://kit.fontawesome.com/2944ad1077.js" crossorigin="anonymous"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        #error{
            color: red;
        }
        #good{
            color: green;/*<i class="fas fa-check-circle"></i> */
        }
    </style>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper">
        <a class="brand-logo master">Becas Nayib</a>
        </div>
    </nav>
</header>
<section class="lo">
    <h2 class="master">Formulario de la Beca</h2>
    <form method="POST" role="form"><br>
        <div class="input-field">
            <i class="fas fa-user-circle prefix"></i>
            <input class="form-control" type="text" placeholder="Nombres y Apellidos del interesado (Ej. Carlos Argueta):" name="nombres" id="nombres" autocomplete="off" required onkeyup="funcnombres()"><br>
            <div id="resultadonombres" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificación ha fallado</div>
        </div><br><br>
        <div class="input-field">
            <i class="fas fa-address-card prefix"></i>
            <input class="form-control" type="text" placeholder="DUI del interesado (Ej. 00000000-0):" maxlength="10" name="apellidos" id="apellidos" autocomplete="off" required onkeyup="funcapellidos();"><br>
            <div id="resultadoapellidos" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificación ha fallado</div>
        </div><br><br>
        <div class="input-field">
            <i class="fas fa-phone-alt prefix"></i>
            <input class="form-control" type="text" placeholder="Número de contacto del interesados (Ej. 6796-7436):" name="contacto" maxlength="9" id="contacto" autocomplete="off" required onkeyup="funccontacto();"><br>
            <div id="resultadocontacto" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificación ha fallado</div>
        </div><br><br>
        <div class="input-field">
            <i class="fas fa-envelope prefix"></i>
            <input class="form-control" type="text" placeholder="Correo electrónico del interesado (Ej. you@gmail.com):" name="correo" id="correo" autocomplete="off" required onkeyup="funccorreo();"><br>
            <div id="resultadocorreo" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificación ha fallado</div>
        </div><br><br>
        <div class="input-field">
            <i class="fas fa-money-check-alt prefix"></i>
            <input class="form-control" type="text" placeholder="Ingresos promedios mensuales (Ej. 67.50):" name="ingreso" id="ingreso" autocomplete="off" required onkeyup="funcingreso();"><br>
            <div id="resultadoingreso" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificación ha fallado</div>
        </div><br><br>
        <div class="input-field">
            <i class="fas fa-users prefix"></i>
            <input class="form-control" type="text" placeholder="Cantidad de personas con las que vive (Ej. 5):" name="familia" id="familia" maxlength="2" autocomplete="off" required onkeyup="funcfamilia();"><br>
            <div id="resultadofamilia" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificación ha fallado</div>
        </div><br><br>
        <input type="submit" class="waves-effect waves-light btn" name="boton" value="Guardar">
    </form>
</section>
<br><br>


<script>
function funcnombres() {
    var textoBusqueda = $("input#nombres").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func1.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadonombres").html(mensaje);
         }); 
     } else { 
        $("#resultadonombres").html('<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado');
     };
};
function funcapellidos() {
    var textoBusqueda = $("input#apellidos").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func2.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoapellidos").html(mensaje);
         }); 
     } else { 
        $("#resultadoapellidos").html('<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado');
     };
};
function funccontacto() {
    var textoBusqueda = $("input#contacto").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func3.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadocontacto").html(mensaje);
         }); 
     } else { 
        $("#resultadocontacto").html('<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado');
     };
};
function funccorreo() {
    var textoBusqueda = $("input#correo").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func4.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadocorreo").html(mensaje);
         }); 
     } else { 
        $("#resultadocorreo").html('<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado');
     };
};
function funcingreso() {
    var textoBusqueda = $("input#ingreso").val();

     if (textoBusqueda != "") {
        $.post("./php/func5.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoingreso").html(mensaje);
         }); 
     } else { 
        $("#resultadoingreso").html('<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado');
     };
};
function funcfamilia() {
    var textoBusqueda = $("input#familia").val();

     if (textoBusqueda != "") {
        $.post("./php/func6.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadofamilia").html(mensaje);
         }); 
     } else { 
        $("#resultadofamilia").html('<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado');
     };
};
</script>
<?php 
    if (!empty($_POST["boton"])) {
        if ($_SESSION["func1"] && $_SESSION["func2"] && $_SESSION["func3"] && $_SESSION["func4"] && $_SESSION["func5"] && $_SESSION["func6"]) {
            echo "<script>Swal.fire('Datos guardados', 'Presione el boton para continuar', 'success')</script>";
        }else{
            echo "<script>Swal.fire('Error de regex', 'Presione el boton para intentarlo nuevamente', 'error')</script>";
        }
        unset($_SESSION["func1"], $_SESSION["func2"],$_SESSION["func3"],$_SESSION["func4"], $_SESSION["func5"], $_SESSION["func6"], $_POST["boton"]);
    }
?>
</body>
</html>
