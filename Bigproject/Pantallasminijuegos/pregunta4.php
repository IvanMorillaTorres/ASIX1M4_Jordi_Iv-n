<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="../IMG/pen-nib-solid-favicon.svg"/>    
<title>Pregunta 4</title>
    
</head>
<body class="fondogeneral">
    <div class="menudificultad centrador">    
                <?php
        session_start();
        if($_SESSION['dificultad']=="dificil"&&$_SESSION['nivel'] == 4){
            ?>
            <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>En que departamento del sheriff ejercía Rick Grimes (The Walking dead) ?(dificil)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto4' class="botones">Santa Clarita Sheriff Departmet</button></div>
                <div class='modbutton'><button name='incorrecto4' class="botones">Merle County Sheriff Department</button></div>
                <div class='modbutton'><button name='incorrecto4' class="botones">Aurora County Sheriff Department</button></div>
                <div class='modbutton'><button name='correcto4' class="botones">King County Sheriff Department</button></div>
            </form>
        <?php 
        }elseif($_SESSION['dificultad']=="bestia"&&$_SESSION['nivel'] == 4){
            ?>
             <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>En que pelicula sale el personaje de Marty Mcfly ?(Bestia)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto4' class="botones">Titanic</button></div>
                <div class='modbutton'><button name='incorrecto4' class="botones">Los Mercernarios</button></div>
                <div class='modbutton'><button name='incorrecto4' class="botones">La junga de cristal</button></div>
                <div class='modbutton'><button name='correcto4' class="botones">Regreso al futuro</button></div>
            </form>
        <?php 
        }elseif($_SESSION['dificultad']=="leyenda"&&$_SESSION['nivel'] == 4){
            ?>
             <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Que transatlántico se hundio en 1912 ?(Leyenda)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto4' class="botones">Costa Concordia</button></div>
                <div class='modbutton'><button name='incorrecto4' class="botones">USS Arizona</button></div>
                <div class='modbutton'><button name='incorrecto4' class="botones">Bismarck</button></div>
                <div class='modbutton'><button name='correcto4' class="botones">Titanic</button></div>
            </form>
        <?php 
        }elseif($_SESSION['nivel'] != 4){
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
</body>
</html>