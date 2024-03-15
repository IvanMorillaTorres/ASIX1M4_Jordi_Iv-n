<?php 
session_start();
$dificultad=$_POST['dificultad'];
if(isset($_POST['enviarnivel']) and $dificultad!=""){
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 1;
        header("location: ../Pantallasminijuegos/pregunta1.php");
}else{
        header("location: ../Pantallasminijuegos/dificultad.php?error=2");
} 

if(isset($_POST['correcto1'])){
        $_SESSION['nivel'] = 2;
        header("location: ../Pantallasminijuegos/pregunta2.php");
}elseif(isset($_POST['incorrecto1'])){
        $_SESSION['nivel'] = 1;
        header("location: ../Pantallasminijuegos/pregunta1.php?error=1");
}

if(isset($_POST['correcto2'])){
        
       
        $_SESSION['nivel'] = 3;
        header("location: ../Pantallasminijuegos/pregunta3.php");
}elseif(isset($_POST['incorrecto2'])){
        
        
        $_SESSION['nivel'] = 2;
        header("location: ../Pantallasminijuegos/pregunta2.php?error=1");
}
if(isset($_POST['correcto3'])){
        
        
        $_SESSION['nivel'] = 4;
        header("location: ../Pantallasminijuegos/pregunta4.php");
}elseif(isset($_POST['incorrecto3'])){
        
        $_SESSION['nivel'] = 3;
        header("location: ../Pantallasminijuegos/pregunta3.php?error=1");
}

if(isset($_POST['correcto4'])){
        
        
        $_SESSION['nivel'] = 5;
        header("location: ../Pantallasminijuegos/pregunta5.php");
}elseif(isset($_POST['incorrecto4'])){
        
        
        $_SESSION['nivel'] = 4;
        header("location: ../Pantallasminijuegos/pregunta4.php?error=1");
}

if(isset($_POST['correcto5'])){
        
        
        $_SESSION['nivel'] = 6;
        header("location: ../Pantallasminijuegos/pregunta6.php");
}elseif(isset($_POST['incorrecto5'])){
        
        
        $_SESSION['nivel'] = 5;
        header("location: ../Pantallasminijuegos/pregunta5.php?error=1");
}

if(isset($_POST['correcto6'])){
        
        
        $_SESSION['nivel'] = 7;
        header("location: ../Pantallasminijuegos/pregunta7.php");
}elseif(isset($_POST['incorrecto6'])){
        
        
        $_SESSION['nivel'] = 6;
        header("location: ../Pantallasminijuegos/pregunta6.php?error=1");
}

if(isset($_POST['correcto7'])){
        
        
        $_SESSION['nivel'] = 8;
        header("location: ../Pantallasminijuegos/pregunta8.php");
}elseif(isset($_POST['incorrecto7'])){
    
        
        $_SESSION['nivel'] = 7;
        header("location: ../Pantallasminijuegos/pregunta7.php?error=1");
}
if(isset($_POST['correcto8'])){
        
        
        $_SESSION['nivel'] = 9;
        header("location: ../Pantallasminijuegos/final.php");
}elseif(isset($_POST['incorrecto8'])){
   
        
        $_SESSION['nivel'] = 8;
        header("location: ../Pantallasminijuegos/pregunta8.php?error=1");
}

if(isset($_POST['volverinicio'])){
        $_SESSION['nivel'] = 0;
        header("location: ../dificultad.php?juego=1");
}



// intento que no he conseguido

// for($i=1;$i<=7;$i++){
//         if(isset($_POST['correcto$i'])){
        
//                 $_SESSION['dificultad'] = $dificultad;
//                 $_SESSION['nivel'] = $i+1;
//                 header("location: ../Pantallasminijuegos/pregunta($i+1).php");
//         }elseif(isset($_POST['incorrecto$i'])){
//                 $_SESSION['dificultad'] = $dificultad;
//                 $_SESSION['nivel'] = $i;
//                 header("location: ../Pantallasminijuegos/pregunta%i.php?error=1");
//         }
              
// }
