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
</body>
</html>