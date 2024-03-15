<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg" href="../IMG/pen-nib-solid-favicon.svg"/>    
</head>
<body class="fondofinal">
    <div class="finaldiv">
    <?php
    session_start();
if($_SESSION['dificultad']=="dificil" && $_SESSION['nivel']==9 ){
    ?>
        <h1 class="finaltexto">Felicidades has completado el juego en dificultad Dificil🤕</h1>    
    <?php 
}elseif($_SESSION['dificultad']=="bestia" && $_SESSION['nivel']==9){
    ?>
        <h1  class="finaltexto">Felicidades has completado el juego en dificultad Bestia😈 </h1>
    <?php 
}elseif($_SESSION['dificultad']=="leyenda" && $_SESSION['nivel']==9){
    ?>
        <h1  class="finaltexto">Felicidades has completado el juego en dificultad Leyenda👹</h1>
    <?php 
}elseif($_SESSION['nivel'] != 9){
    header("location: ../Pantallasminijuegos/dificultad.php?error=3");
}
    ?>
    <form action="../PHP/validacion.php" method="post">
        <DIV>
            <button name="volverinicio posicionamiento" class="botones" id="finalbutton">Volver al inicio</button>
        </DIV>
    </form>
    </div>  

</body>
</html>