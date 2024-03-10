<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
    <title>Pregunta 1</title>
</head>
<body>
    <div>    
        <?php
session_start();
if(isset($_POST['enviarnivel'])){
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['nivel'] = $_POST['nivel'];
};
if($_SESSION['dificultad']=="dificil"||$_SESSION['nivel'] == 1){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>Como es la pregunta 1?</h4>
    <div><button name='incorrecto1'>bonita</button></div>
    <div><button name='incorrecto1'>amarila</button></div>
    <div><button name='incorrecto1'>roja</button></div>
    <div><button name='correcto1'>marron</button></div>
<?php 


}elseif($_SESSION['dificultad']=="bestia"||$_SESSION['nivel'] == 1){
    ?><h4>Como es la pregunta de dificil?</h4>
    <div><button name='incorrecto1'>bonita</button></div>
    <div><button name='incorrecto1'>amarila</button></div>
    <div><button name='incorrecto1'>roja</button></div>
    <div><button name='correcto1'>marron</button></div>
<?php 
}elseif($_SESSION['dificultad']=="leyenda"||$_SESSION['nivel'] == 1){
    ?><h4>Como es la pregunta 1 de dificil y el color?</h4>
    <div><button name='incorrecto1'>fea</button></div>
    <div><button name='incorrecto1'>rojita</button></div>
    <div><button name='incorrecto1'>nefjvnlef</button></div>
    <div><button name='correcto1'>vrvrvrvr</button></div>
    </form>
<?php 
}

if(isset($_GET['error'])){
    $error=$_POST['error'];
    if ($error == "1"){
echo "Has fallado la respuesta de la segunda pregunta, toca volver para atras";
}
}
         ?>
    </div>
    
</body>
</html>