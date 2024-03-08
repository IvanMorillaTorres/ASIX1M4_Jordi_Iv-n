<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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




         ?>
    </div>
    
</body>
</html>