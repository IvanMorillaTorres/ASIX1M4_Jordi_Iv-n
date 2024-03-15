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
<title>Pregunta 1</title>
    
</head>
<body class="fondogeneral">
    <div class="menudificultad movil">   
                <?php
        session_start();
        if($_SESSION['dificultad']=="dificil" && $_SESSION['nivel'] == 1){
            ?>
        <form action="../PHP/validacion.php" method="post">
            <div class="titulos">
                <h4>Quien gano a Ferrari en Le Mans en 1966 ?(dificil)</h4>
            </div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Chevrolet</button></div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Lamborghini</button></div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Dodge</button></div>
            <div class='modbutton'><button name='correcto1' class="botones">Ford</button></div>
        </form>
        <?php 


        }elseif($_SESSION['dificultad']=="bestia" && $_SESSION['nivel'] == 1){
            ?>

        <form action="../PHP/validacion.php" method="post">
            <div class="titulos">
                    <h4>Que cancion versiona Jack Black para Kung Fu Panda 4 ?(Bestia)</h4>
            </div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Stairways to heaven</button></div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Carry on my wayward son</button></div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Nothing else matters</button></div>
            <div class='modbutton'><button name='correcto1' class="botones">Baby One More Time</button></div>
        </form>
        <?php 
        }elseif($_SESSION['dificultad']=="leyenda" && $_SESSION['nivel'] == 1){
            ?>
        <form action="../PHP/validacion.php" method="post">
            <div class="titulos">
                <h4>Que tipo de coche conducia Micheal Knight ?(Leyenda)</h4>
            </div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Dodge Durango</button></div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Cadillac el Dorado</button></div>
            <div class='modbutton'><button name='incorrecto1' class="botones">Ford Explorer</button></div>
            <div class='modbutton'><button name='correcto1' class="botones">Pontiac Firebird Am</button></div>
        </form>
        <?php 
        }elseif($_SESSION['nivel'] != 1){
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
    <title>Pregunta 1</title>
</head>
<body>
    <div>    
        <?php
session_start();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
if(isset($_POST['enviarnivel'])){
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['nivel'] = $_POST['nivel'];
};
if($_SESSION['dificultad']=="dificil"||$_SESSION['nivel'] == 1){
    ?>
    <form action="../PHP/validacion.php" method="post">
<<<<<<< HEAD
=======
=======
if(isset($_POST['submitrespuesta'])){
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['nivel'] = 1;
};
if($_SESSION['dificultad']=="dificil"){
    ?>
    <form action="../PHP/validacion.php" method="post">
        <?php 
        session_start();
        $_SESSION['dificultad']="dificil";
        ?>
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
    <h4>Como es la pregunta 1?</h4>
    <div><button name='incorrecto1'>bonita</button></div>
    <div><button name='incorrecto1'>amarila</button></div>
    <div><button name='incorrecto1'>roja</button></div>
    <div><button name='correcto1'>marron</button></div>
<?php 

<<<<<<< HEAD

}elseif($_SESSION['dificultad']=="bestia"||$_SESSION['nivel'] == 1){
=======
<<<<<<< HEAD

}elseif($_SESSION['dificultad']=="bestia"||$_SESSION['nivel'] == 1){
=======
session_start();
}elseif($_SESSION['dificultad']=="bestia"){
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
    ?><h4>Como es la pregunta de dificil?</h4>
    <div><button name='incorrecto1'>bonita</button></div>
    <div><button name='incorrecto1'>amarila</button></div>
    <div><button name='incorrecto1'>roja</button></div>
    <div><button name='correcto1'>marron</button></div>
<?php 
<<<<<<< HEAD
}elseif($_SESSION['dificultad']=="leyenda"||$_SESSION['nivel'] == 1){
=======
<<<<<<< HEAD
}elseif($_SESSION['dificultad']=="leyenda"||$_SESSION['nivel'] == 1){
=======
session_start();
}elseif($_SESSION['dificultad']=="leyenda"){
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
    ?><h4>Como es la pregunta 1 de dificil y el color?</h4>
    <div><button name='incorrecto1'>fea</button></div>
    <div><button name='incorrecto1'>rojita</button></div>
    <div><button name='incorrecto1'>nefjvnlef</button></div>
    <div><button name='correcto1'>vrvrvrvr</button></div>
    </form>
<?php 
}

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
if(isset($_GET['error'])){
    $error=$_POST['error'];
    if ($error == "1"){
echo "Has fallado la respuesta de la segunda pregunta, toca volver para atras";
}
}
<<<<<<< HEAD
=======
=======
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
         ?>
    </div>
    
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
</body>
</html>