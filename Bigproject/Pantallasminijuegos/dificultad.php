<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dificultad</title>
    <link rel="stylesheet" src="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Kanit&display=swap" rel="stylesheet">
</head>
<body class="fondogeneral">
    <form action="../PHP/validacion.php" method="post">
        <div class="menudificultad">
            <label for="">DIficil🤕</label>
            <input type="radio" name="dificultad" value="dificil">
            <label for="">Bestia😈</label>
            <input type="radio" name="dificultad" value="bestia">
            <label for="">Leyenda👹</label>
            <input type="radio" name="dificultad" value="leyenda">
            <button name="enviarnivel" value="enviarnivel">Comenzar</button>
        </div>
    </form>
</body>
</html>
