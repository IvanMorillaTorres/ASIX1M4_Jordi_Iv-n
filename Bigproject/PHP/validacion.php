<?php 
session_start();
$dificultad=$_POST['dificultad'];
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
if(isset($_POST['enviarnivel'])){
=======
<<<<<<< HEAD
if(isset($_POST['enviarnivel'])){
=======
if(($_POST['enviarnivel']=="enviarnivel")){
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 1;
        header("location: ../Pantallasminijuegos/pregunta1.php");
        
}
if(isset($_POST['correcto1'])){
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
        
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 2;
        header("location: ../Pantallasminijuegos/pregunta2.php");
}elseif(isset($_POST['incorrecto1'])){
<<<<<<< HEAD
=======
=======
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 2;
        header("location: ../Pantallasminijuegos/pregunta2.php");
        


}else{
        session_start();
>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
        $_SESSION['dificultad'] = $dificultad;
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
        $_SESSION['nivel'] = 1;
        header("location: ../Pantallasminijuegos/pregunta1.php?error=1");
}

<<<<<<< HEAD
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
        
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
if(isset($_POST['correcto2'])){
        
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 3;
        header("location: ../Pantallasminijuegos/pregunta3.php");
}elseif(isset($_POST['incorrecto2'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 2;
        header("location: ../Pantallasminijuegos/pregunta2.php?error=1");
}


if(isset($_POST['correcto3'])){
        
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 4;
        header("location: ../Pantallasminijuegos/pregunta4.php");
}elseif(isset($_POST['incorrecto3'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
        $_SESSION['nivel'] = 3;
        header("location: ../Pantallasminijuegos/pregunta3.php?error=1");
}

if(isset($_POST['correcto4'])){
        
<<<<<<< HEAD
        
        $_SESSION['nivel'] = 5;
        header("location: ../Pantallasminijuegos/pregunta5.php");
}elseif(isset($_POST['incorrecto4'])){
        
        
=======
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 5;
        header("location: ../Pantallasminijuegos/pregunta5.php");
}elseif(isset($_POST['incorrecto4'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
        $_SESSION['nivel'] = 4;
        header("location: ../Pantallasminijuegos/pregunta4.php?error=1");
}

if(isset($_POST['correcto5'])){
        
<<<<<<< HEAD
        
        $_SESSION['nivel'] = 6;
        header("location: ../Pantallasminijuegos/pregunta6.php");
}elseif(isset($_POST['incorrecto5'])){
        
        
=======
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 6;
        header("location: ../Pantallasminijuegos/pregunta6.php");
}elseif(isset($_POST['incorrecto5'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
        $_SESSION['nivel'] = 5;
        header("location: ../Pantallasminijuegos/pregunta5.php?error=1");
}

if(isset($_POST['correcto6'])){
        
<<<<<<< HEAD
        
        $_SESSION['nivel'] = 7;
        header("location: ../Pantallasminijuegos/pregunta7.php");
}elseif(isset($_POST['incorrecto6'])){
        
        
=======
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 7;
        header("location: ../Pantallasminijuegos/pregunta7.php");
}elseif(isset($_POST['incorrecto6'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
        $_SESSION['nivel'] = 6;
        header("location: ../Pantallasminijuegos/pregunta6.php?error=1");
}

if(isset($_POST['correcto7'])){
        
<<<<<<< HEAD
        
        $_SESSION['nivel'] = 8;
        header("location: ../Pantallasminijuegos/pregunta8.php");
}elseif(isset($_POST['incorrecto7'])){
    
        
=======
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 8;
        header("location: ../Pantallasminijuegos/pregunta8.php");
}elseif(isset($_POST['incorrecto7'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
        $_SESSION['nivel'] = 7;
        header("location: ../Pantallasminijuegos/pregunta7.php?error=1");
}
if(isset($_POST['correcto8'])){
        
<<<<<<< HEAD
        
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
=======
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 9;
        header("location: ../Pantallasminijuegos/pregunta9.php");
}elseif(isset($_POST['incorrecto7'])){
        session_start();
        $_SESSION['dificultad'] = $dificultad;
        $_SESSION['nivel'] = 8;
        header("location: ../Pantallasminijuegos/pregunta8.php?error=1");
}
<<<<<<< HEAD
=======
=======

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

>>>>>>> 1f469fd1e1a666aca7b4d3ffe5a39feb46713a2b
>>>>>>> c8364a5017c1535c46abc1a9a312f611bad26233
>>>>>>> 1c54042e2e81dd96c44a66d5ec6a9221fb209216
