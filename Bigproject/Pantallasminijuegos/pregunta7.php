<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
    <title>Pregunta 4</title>
</head>
<body>
    <div>    
        <?php
session_start();
if(isset($_REQUEST['correcto6'])){
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['nivel'] = $_POST['nivel'];
}
if($_SESSION['dificultad']=="dificil" ||$_SESSION['nivel'] == 7 ){
    ?>
    <h4>TIpo dif dificil</h4>
    <form action="../PHP/validacion.php" method="post">
        <div><button name='incorrecto7'>bonita</button></div>
        <div><button name='incorrecto7'>amarila</button></div>
        <div><button name='incorrecto7'>roja</button></div>
        <div><button name='correcto7'>marron</button></div>
        <button> </button>
    </form>
<?php 
}elseif($_SESSION['dificultad']=="bestia" ||$_SESSION['nivel'] == 7){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>TIpo dif bestia</h4>
        <div><button name='incorrecto7'>bonita</button></div>
        <div><button name='incorrecto7'>amarila</button></div>
        <div><button name='incorrecto7'>roja</button></div>
        <div><button name='correcto7'>marron</button></div>
    </form>
<?php 
}elseif($_SESSION['dificultad']=="leyenda" ||$_SESSION['nivel'] == 7){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>TIpo dif leyenda</h4>
        <div><button name='incorrecto7'>fea</button></div>
        <div><button name='incorrecto7'>rojita</button></div>
        <div><button name='incorrecto7'>nefjvnlef</button></div>
        <div><button name='correcto7'>vrvrvrvr</button></div>
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
    
</body>
</html>