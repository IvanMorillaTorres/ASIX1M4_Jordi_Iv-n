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
    <link rel="icon" type="image/svg" href="../IMG/pen-nib-solid-favicon.svg" />
    <title>Pregunta 7</title>

</head>

<body class="fondogeneral">
    <div class="menudificultad centrador">
        <?php
        session_start();
        if (isset($_POST['enviarnivel'])) {
            $_SESSION['dificultad'] = $_POST['dificultad'];
            $_SESSION['nivel'] = $_POST['nivel'];
        };
        if ($_SESSION['dificultad'] == "dificil" && $_SESSION['nivel'] == 7) {
        ?>
            <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Cuantos estados tiene Estados Unidos ?(dificil)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto7' class="botones">45</button></div>
                <div class='modbutton'><button name='incorrecto7' class="botones">60</button></div>
                <div class='modbutton'><button name='incorrecto7' class="botones">51</button></div>
                <div class='modbutton'><button name='correcto7' class="botones">50</button></div>
            </form>
        <?php


        } elseif ($_SESSION['dificultad'] == "bestia" && $_SESSION['nivel'] == 7) {
        ?>
            <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Cual fue el primer coche de la historia que se comercializo ?(Bestia)</h4>
                </div> 
                <div class='modbutton'><button name='incorrecto7' class="botones">Seat 600</button></div>
                <div class='modbutton'><button name='incorrecto7' class="botones">Mercedes clase A</button></div>
                <div class='modbutton'><button name='incorrecto7' class="botones">GMC Yukon</button></div>
                <div class='modbutton'><button name='correcto7' class="botones">Ford Model T</button></div>      
            </form>
        <?php
        } elseif ($_SESSION['dificultad'] == "leyenda" && $_SESSION['nivel'] == 7) {
        ?>
            <form action="../PHP/validacion.php" method="post">
                <div class="titulos">
                    <h4>Como se llama la persona que tiene que salvar Mario ?(Leyenda)</h4>
                </div>
                <div class='modbutton'><button name='incorrecto7' class="botones">Bowser</button></div>
                <div class='modbutton'><button name='incorrecto7' class="botones">Yoshi</button></div>
                <div class='modbutton'><button name='incorrecto7' class="botones">Luigi</button></div>
                <div class='modbutton'><button name='correcto7' class="botones">Princesa Peach</button></div>
                
            </form>
        <?php
        }elseif($_SESSION['nivel'] != 7){
            header("location: ../Pantallasminijuegos/dificultad.php?error=3");
        }
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == "1") {

                echo "</br>Has fallado la respuesta de la segunda pregunta, piensalo y bien acierta.";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>