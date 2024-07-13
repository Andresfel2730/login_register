<?php
session_start();
if (isset($_SESSION['usuario'])) {
    echo'
    <script>
       alert("por favor debes iniciar session");
       window.location = "index1.php"
    </script>   
    ';
    //header('location: index1.php');
    session_destroy();
    die();
     
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenida-andres</title>
</head>
<body>
    <h1>benvenido a mi mundo</h1>
    <a href="php/cerrar_session.php">cerrar session</a>
</body>
</html>