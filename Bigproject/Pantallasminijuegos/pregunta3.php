<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
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


         ?>
    </div>
    
</body>
</html>