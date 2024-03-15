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
<title>Pregunta 6</title>
    
</head>
<body class="fondogeneral">
    <div class="menudificultad centrador">    
                <?php
        session_start();
        if(isset($_POST['enviarnivel'])){
            $_SESSION['dificultad'] = $_POST['dificultad'];
            $_SESSION['nivel'] = $_POST['nivel'];
        };
        if($_SESSION['dificultad']=="dificil"&&$_SESSION['nivel'] == 6){
            ?>
            <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Asesino en serie que aterrorizo el norte de California entre diciembre de 1968 y octubre de 1969 ?(dificil)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto6' class="botones">Jack el destripador</button></div>
                <div class='modbutton'><button name='incorrecto6' class="botones">Ted Bundy</button></div>
                <div class='modbutton'><button name='incorrecto6' class="botones">Charles Manson</button></div>
                <div class='modbutton'><button name='correcto6' class="botones">Asesino del Zodiaco</button></div>
            </form>
        <?php 


        }elseif($_SESSION['dificultad']=="bestia"&&$_SESSION['nivel'] == 6){
            ?>
            <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>En que año finalizo la Segunda guerra mundial ?(Bestia)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto6' class="botones">1939</button></div>
                <div class='modbutton'><button name='incorrecto6' class="botones">1845</button></div>
                <div class='modbutton'><button name='incorrecto6' class="botones">1950</button></div>
                <div class='modbutton'><button name='correcto6' class="botones">1945</button></div>
            </form>
        <?php 
        }elseif($_SESSION['dificultad']=="leyenda"&&$_SESSION['nivel'] == 6){
            ?>
            <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Como se llamaba el emperador de Roma ?(Leyenda)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto6' class="botones">Antonio Cesar</button></div>
                <div class='modbutton'><button name='incorrecto6' class="botones">Augusto Cesar</button></div>
                <div class='modbutton'><button name='incorrecto6' class="botones">Maximo Decimo Meridio</button></div>
                <div class='modbutton'><button name='correcto6' class="botones">Julio Cesar</button></div>
            </form>
        <?php 
        }elseif($_SESSION['nivel'] != 6){
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
    <title>Pregunta 4</title>
</head>
<body>
    <div>    
        <?php
session_start();
if(isset($_REQUEST['correcto5'])){
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['nivel'] = $_POST['nivel'];
}
if($_SESSION['dificultad']=="dificil" ||$_SESSION['nivel'] == 6 ){
    ?>
    <h4>TIpo dif dificil</h4>
    <form action="../PHP/validacion.php" method="post">
        <div><button name='incorrecto6'>bonita</button></div>
        <div><button name='incorrecto6'>amarila</button></div>
        <div><button name='incorrecto6'>roja</button></div>
        <div><button name='correcto6'>marron</button></div>
        <button> </button>
    </form>
<?php 
}elseif($_SESSION['dificultad']=="bestia" ||$_SESSION['nivel'] == 6){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>TIpo dif bestia</h4>
        <div><button name='incorrecto6'>bonita</button></div>
        <div><button name='incorrecto6'>amarila</button></div>
        <div><button name='incorrecto6'>roja</button></div>
        <div><button name='correcto6'>marron</button></div>
    </form>
<?php 
}elseif($_SESSION['dificultad']=="leyenda" ||$_SESSION['nivel'] == 6){
    ?>
    <form action="../PHP/validacion.php" method="post">
    <h4>TIpo dif leyenda</h4>
        <div><button name='incorrecto6'>fea</button></div>
        <div><button name='incorrecto6'>rojita</button></div>
        <div><button name='incorrecto6'>nefjvnlef</button></div>
        <div><button name='correcto6'>vrvrvrvr</button></div>
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