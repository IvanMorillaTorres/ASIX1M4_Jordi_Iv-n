
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
        </div>
    </form>
</body>
</html>
