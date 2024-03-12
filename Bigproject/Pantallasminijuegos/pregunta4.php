<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
    <title>Pregunta 4</title>
</head>
<body>
    <div>    
        <?php
session_start();
if(isset($_REQUEST['correcto3'])){
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['nivel'] = $_POST['nivel'];
}
if($_SESSION['dificultad']=="dificil" ||$_SESSION['nivel'] == 4 ){
    ?>
    <h4>TIpo dif dificil</h4>
    <form action="../PHP/validacion.php" method="post">
    <h4>¿Cuál fue la capital del Imperio Romano?</h4>
        <div><button name='correcto4'>Roma</button></div>
        <div><button name='incorrecto4'>Atenas</button></div>
        <div><button name='incorrecto4'>Cartago</button></div>
        <div><button name='incorrecto4'>Constantinopla</button></div>
    </form>
<?php 
}elseif($_SESSION['dificultad']=="bestia" ||$_SESSION['nivel'] == 4){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>TIpo dif bestia</h4>
        <div><button name='incorrecto4'>bonita</button></div>
        <div><button name='incorrecto4'>amarila</button></div>
        <div><button name='incorrecto4'>roja</button></div>
        <div><button name='correcto4'>marron</button></div>
    </form>
<?php 
}elseif($_SESSION['dificultad']=="leyenda" ||$_SESSION['nivel'] == 4){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>TIpo dif leyenda</h4>
        <div><button name='incorrecto4'>fea</button></div>
        <div><button name='incorrecto4'>rojita</button></div>
        <div><button name='incorrecto4'>nefjvnlef</button></div>
        <div><button name='correcto4'>vrvrvrvr</button></div>
    </form>
<?php 
}


         ?>
    </div>
    
</body>
</html>