<?php 
if(!isset($_POST['correcto1'])) {
    header("location: ../Pantallasminijuegos/pregunta1.php?error=2");
?>
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
    </div>
    
</body>
</html>