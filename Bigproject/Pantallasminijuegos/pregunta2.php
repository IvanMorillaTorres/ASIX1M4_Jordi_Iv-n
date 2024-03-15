<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<?php 
if(!isset($_POST['correcto1'])) {
    header("location: ../Pantallasminijuegos/pregunta1.php?error=2");
?>
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
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
    <div class="menudificultad centrador">    
                <?php
        session_start();
        
        if($_SESSION['dificultad']=="dificil"&&$_SESSION['nivel'] == 2){
            ?>
            <form action="../PHP/validacion.php" method="post">
            <div class="titulos">
                <h4>Con quien se casa el protagonista de Uncharted Nathan Drake ?(dificil)</h4>
            </div>
            <div class='modbutton'><button name='incorrecto2' class="botones">Nadine Ross</button></div>
            <div class='modbutton'><button name='incorrecto2' class="botones">Chloe Frazer</button></div>
            <div class='modbutton'><button name='incorrecto2' class="botones">Victor Sullivan</button></div>
            <div class='modbutton'><button name='correcto2' class="botones">Elena Fisher</button></div>
            </form>
       <?php 


        }elseif($_SESSION['dificultad']=="bestia"&&$_SESSION['nivel'] == 2){
            ?>
             <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>A que pertenece esta parte del logotipo de Porsche ?(Bestia)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto2' class="botones">Es parte de la bandera alemana</button></div>
                <div class='modbutton'><button name='incorrecto2' class="botones">Es original de la marca</button></div>
                <div class='modbutton'><button name='incorrecto2' class="botones">Al imperio Romano</button></div>
                <div class='modbutton'><button name='correcto2' class="botones">La 25.ª División Panzer</button></div>
            </form>
        <?php 
        }elseif($_SESSION['dificultad']=="leyenda"&&$_SESSION['nivel'] == 2){
            ?>
             <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Que pais lucho durante la segunda guerra mundial en EU y el Pacifico ?(Leyenda)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto2' class="botones">Italia</button></div>
                <div class='modbutton'><button name='incorrecto2' class="botones">Alemania</button></div>
                <div class='modbutton'><button name='incorrecto2' class="botones">Japon</button></div>
                <div class='modbutton'><button name='correcto2' class="botones">Estados Unidos</button></div>
            </form>
        <?php 
        }elseif($_SESSION['nivel'] != 2){
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
    <title>Pregunta 2</title>
</head>
<body>
    <div>    
        <?php
session_start();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
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
<<<<<<< HEAD
=======
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
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
    </div>
    
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
</body>
</html>