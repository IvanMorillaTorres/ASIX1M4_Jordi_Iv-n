<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="../IMG/pen-nib-solid-favicon.svg"/>    
<title>Pregunta 3</title>
    
</head>
<body class="fondogeneral">
    <div class="menudificultad centrador">    
                <?php
        session_start();
        if($_SESSION['dificultad']=="dificil"&&$_SESSION['nivel'] == 3){
            ?>
            <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Que carabelas componian la expedicion de Colón ?(dificil)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto3' class="botones">No se sabe</button></div>
                <div class='modbutton'><button name='incorrecto3' class="botones">La Perla Negra y Mundaca</button></div>
                <div class='modbutton'><button name='incorrecto3' class="botones">Reina sofia, Juan Sebastián de Elcano y Juan Carlos I</button></div>
                <div class='modbutton'><button name='correcto3' class="botones">La Pinta, la Niña y la Santa Maria</button></div>
            </form>
       <?php 


        }elseif($_SESSION['dificultad']=="bestia"&&$_SESSION['nivel'] == 3){
            ?>
             <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Donde esta situado el cementerio de la pelicula El Bueno el Feo y el Malo ?(Bestia)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto3' class="botones">Utah</button></div>
                <div class='modbutton'><button name='incorrecto3' class="botones">Alemria</button></div>
                <div class='modbutton'><button name='incorrecto3' class="botones">Arizona</button></div>
                <div class='modbutton'><button name='correcto3' class="botones">Burgos</button></div>
            </form>
        <?php 
        }elseif($_SESSION['dificultad']=="leyenda"&&$_SESSION['nivel'] == 3){
            ?>
             <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Cual es el vehiculo policial mas famoso del cine ?(Leyenda)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto3' class="botones">Dodge Charger</button></div>
                <div class='modbutton'><button name='incorrecto3' class="botones">Chevrolet Imapala</button></div>
                <div class='modbutton'><button name='incorrecto3' class="botones">Ford Explorer</button></div>
                <div class='modbutton'><button name='correcto3' class="botones">Ford Crown Victoria</button></div>
            </form>
        <?php 
        }elseif($_SESSION['nivel'] != 3){
            header("location: ../Pantallasminijuegos/dificultad.php?error=3");
        }
        if(isset($_GET['error'])){
            $error=$_GET['error'];
            if ($error == "1"){
            
        echo "</br>Has fallado la respuesta de la segunda pregunta, piensalo y bien acierta.";
        }
        }
                ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
=======
    <link rel="stylesheet" src="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
    <title>Pregunta 3</title>
</head>
<body>
    <div>    
        <?php
session_start();
if(isset($_REQUEST['correcto2'])){
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['nivel'] = $_POST['nivel'];
}
if($_SESSION['dificultad']=="dificil" ||$_SESSION['nivel'] == 3 ){
    ?>
    <h4>TIpo dif dificil</h4>
    <form action="../PHP/validacion.php" method="post">
    <h4>¿Quién fue el primer presidente de Estados Unidos?</h4>
        <div><button name='incorrecto3'>Thomas Jefferson</button></div>
        <div><button name='correcto3'>George Washington</button></div>
        <div><button name='incorrecto3'>Abraham Lincoln</button></div>
        <div><button name='incorrecto3'>Alexander Hamilton</button></div>
    </form>
<?php 
}elseif($_SESSION['dificultad']=="bestia" ||$_SESSION['nivel'] == 3){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>TIpo dif bestia</h4>
        <div><button name='incorrecto3'>bonita</button></div>
        <div><button name='incorrecto3'>amarila</button></div>
        <div><button name='incorrecto3'>roja</button></div>
        <div><button name='correcto3'>marron</button></div>
    </form>
<?php 
}elseif($_SESSION['dificultad']=="leyenda" ||$_SESSION['nivel'] == 3){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>TIpo dif leyenda</h4>
        <div><button name='incorrecto3'>fea</button></div>
        <div><button name='incorrecto3'>rojita</button></div>
        <div><button name='incorrecto3'>nefjvnlef</button></div>
        <div><button name='correcto3'>vrvrvrvr</button></div>
    </form>
<?php 
}
<<<<<<< HEAD
=======
=======
    <title>Pregunta 1</title>
</head>
<body>
    
    <div>
        <?php
session_start();
if(isset($_POST['submitrespuesta'])) {
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['pregunta_actual'] = 1;
};


// if(isset($_POST['submit'])) {
//     $_SESSION['dificultad'] = $_POST['dificultad'];
//     $_SESSION['pregunta_actual'] = 2;
// };
// if(isset($_POST['submit'])) {
//     $_SESSION['dificultad'] = $_POST['dificultad'];
//     $_SESSION['pregunta_actual'] = 3;
// };
// if(isset($_POST['submit'])) {
//     $_SESSION['dificultad'] = $_POST['dificultad'];
//     $_SESSION['pregunta_actual'] = 4;
// };
// if(isset($_POST['submit'])) {
//     $_SESSION['dificultad'] = $_POST['dificultad'];
//     $_SESSION['pregunta_actual'] = 5;
// };
// if(isset($_POST['submit'])) {
//     $_SESSION['dificultad'] = $_POST['dificultad'];
//     $_SESSION['pregunta_actual'] = 6;
// };
// if(isset($_POST['submit'])) {
//     $_SESSION['dificultad'] = $_POST['dificultad'];
//     $_SESSION['pregunta_actual'] = 7;
// };
// if(isset($_POST['submit'])) {
//     $_SESSION['dificultad'] = $_POST['dificultad'];
//     $_SESSION['pregunta_actual'] = 8;
// };


>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233


         ?>
    </div>
    
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
</body>
</html>