<<<<<<< HEAD

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dificultad</title>  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="../IMG/pen-nib-solid-favicon.svg"/>
</head>
<body class="fondogeneral">
    <form action="../PHP/validacion.php" method="post">
    
        <div class="menudificultad">
            <div class="titulodificultades">    
                <h1>Selecciona el nivel</h1>
                <?php
if(isset($_GET['error'])){
    $error=$_GET['error'];
    if ($error == "2"){
echo "No puedes empezar el juego sin seleccionar una dificultad🤦‍♂️";
} elseif(isset($_GET['error'])){
    $error=$_GET['error'];
    if ($error == "3"){echo "Tu lo que eres es un tramposo eh, tira pal principio";}
}
if(isset($_GET['vueltajuego'])){
    $error1=$_GET['vueltajuego'];
    if ($error1 == "1"){
echo "Para volver a jugar vuelve a seleccionar una dificultad :)";
}
}
}
?>  

            </div>     
            <div class="dificultades"> 
                <label for="">Dificil🤕</label>
                <input type="radio" name="dificultad" value="dificil">
            </div>
            <div class="dificultades">
                <label for="">Bestia😈</label>
                <input type="radio" name="dificultad" value="bestia">
            </div>
            <div class="dificultades">    
                <label for="">Leyenda👹</label>
                <input type="radio" name="dificultad" value="leyenda">
            </div>
            <div class="dificultades">
                <button name="enviarnivel" value="enviarnivel" class="botones" id="dificultadbutton">Comenzar</button>
            <div>


            
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
=======
<<<<<<< HEAD

=======
<!DOCTYPE html>
<html lang="en">
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dificultad</title>
<<<<<<< HEAD
    <link rel="stylesheet" src="../CSS/style.css">  
=======
    <link rel="stylesheet" src="../CSS/style.css">
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
</head>
<body class="fondogeneral">
    <form action="../PHP/validacion.php" method="post">
        <div class="menudificultad">
<<<<<<< HEAD
            <div class="niveles">    
                <label for="">DIficil🤕</label>
                <input type="radio" name="dificultad" value="dificil">
            </div>
            <div class="niveles">
                <label for="">Bestia😈</label>
                <input type="radio" name="dificultad" value="bestia">
            </div>
            <div class="niveles">    
                <label for="">Leyenda👹</label>
                <input type="radio" name="dificultad" value="leyenda">
            </div>
            <div class="niveles">
                <button name="enviarnivel" value="enviarnivel">Comenzar</button>
            <div>
=======
            <label for="">DIficil🤕</label>
            <input type="radio" name="dificultad" value="dificil">
            <label for="">Bestia😈</label>
            <input type="radio" name="dificultad" value="bestia">
            <label for="">Leyenda👹</label>
            <input type="radio" name="dificultad" value="leyenda">
            <button name="enviarnivel" value="enviarnivel">Comenzar</button>
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
        </div>
    </form>
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
</body>
</html>
