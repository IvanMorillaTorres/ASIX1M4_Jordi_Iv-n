<<<<<<< HEAD
=======
<?php 
if(!isset($_POST['correcto1'])) {
    header("location: ../Pantallasminijuegos/pregunta1.php?error=2");
?>
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
    <title>Pregunta 2</title>
</head>
<body>
    <div>    
        <?php
session_start();
<<<<<<< HEAD
if(isset($_REQUEST['correcto1'])){
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['nivel'] = $_POST['nivel'];
}
if($_SESSION['dificultad']=="dificil" ||$_SESSION['nivel'] == 2 ){
    ?>
    <h4>TIpo dif dificil</h4>
    <form action="../PHP/validacion.php" method="post">
    <h4>Dificultad: Difícil</h4>
    <div><button name='incorrecto2'>Hidrógeno</button></div>
    <div><button name='incorrecto2'>Nitrógeno</button></div>
    <div><button name='incorrecto2'>Carbono</button></div>
    <div><button name='correcto2'>Oxígeno</button></div>


    </form>
<?php 
}elseif($_SESSION['dificultad']=="bestia" ||$_SESSION['nivel'] == 2){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>¿En qué año comenzó la Revolución Francesa?</h4>
        <div><button name='incorrecto2'>1776</button></div>
        <div><button name='incorrecto2'>1789</button></div>
        <div><button name='incorrecto2'>1812</button></div>
        <div><button name='correcto2'>1848</button></div>
<?php 
}elseif($_SESSION['dificultad']=="leyenda" ||$_SESSION['nivel'] == 2){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>Capital de Islandia</h4>
        <div><button name='incorrecto2'>Oslo</button></div>
        <div><button name='incorrecto2'>Estocolmo</button></div>
        <div><button name='incorrecto2'>Copenhague</button></div>
        <div><button name='correcto2'>Reikiavik</button></div>

    </form>
<?php 
}


         ?>
=======
    $_SESSION['dificultad'] = $_POST['dificultad'];
    if($_SESSION['nivel'] == 2){
        if($_SESSION['dificultad']=="dificil"){
            
            ?>
            <h4>Como es la pregunta 1?</h4>
            <form action="../PHP/validacion.php" method="post">
                <div><button name='incorrecto2'>bonita</button></div>
                <div><button name='incorrecto2'>amarila</button></div>
                <div><button name='incorrecto2'>roja</button></div>
                <div><button name='correcto2'>marron</button></div>
                <button> </button>
            </form>
        <?php 
        session_start();
        }elseif($_SESSION['dificultad']=="bestia"){
            ?>
            <form action="../PHP/validacion.php" method="post">
            <h4>Como es la pregunta de dificil?</h4>
                <div><button name='incorrecto2'>bonita</button></div>
                <div><button name='incorrecto2'>amarila</button></div>
                <div><button name='incorrecto2'>roja</button></div>
                <div><button name='correcto2'>marron</button></div>
            </form>
        <?php 
        session_start();
        }elseif($_SESSION['dificultad']=="leyenda"){
            ?>
            <form action="../PHP/validacion.php" method="post">
            <h4>Como es la pregunta 1 de dificil y el color?</h4>
                <div><button name='incorrecto2'>fea</button></div>
                <div><button name='incorrecto2'>rojita</button></div>
                <div><button name='incorrecto2'>nefjvnlef</button></div>
                <div><button name='correcto2'>vrvrvrvr</button></div>
            </form>
        <?php 
        }
    }
}

$error=$_GET['error'];
if(isset($_GET['error'])){
    if ($error == "1"){
    echo "Has fallado la respuesta de la segunda pregunta, toca volver para atras";
    }
}
if(isset($_GET['error'])){
    if ($error == "2"){
    echo "No te saltaras las pantallas";
    }
}
 
 ?>
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
    </div>
    
</body>
</html>