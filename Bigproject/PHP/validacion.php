<?php 
session_start();
$dificultad=$_POST['dificultad'];
if(($_POST['enviarnivel']=="enviarnivel")){
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 1;
        header("location: ../Pantallasminijuegos/pregunta1.php");
        
}
if(isset($_POST['correcto1'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 2;
        header("location: ../Pantallasminijuegos/pregunta2.php");
        


}else{
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 1;
        header("location: ../Pantallasminijuegos/pregunta1.php?error=1");
}


if(isset($_POST['correcto3'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 3;
        header("location: ../Pantallasminijuegos/pregunta3.php");
}if(isset($_POST['correcto4'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 4;
        header("location: ../Pantallasminijuegos/pregunta4.php");
}if(isset($_POST['correcto5'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 5;
        header("location: ../Pantallasminijuegos/pregunta5.php");
}
if(isset($_POST['correcto6'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 6;
        header("location: ../Pantallasminijuegos/pregunta6.php");
}
if(isset($_POST['correcto7'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 7;
        header("location: ../Pantallasminijuegos/pregunta7.php");
}

if(isset($_POST['correcto8'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 8;
        header("location: ../Pantallasminijuegos/pregunta8.php");
}

