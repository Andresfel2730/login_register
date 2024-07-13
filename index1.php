<?php

session_start();
if (isset($_SESSION['usuario'])) {
    header('location: bienvenida.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login y registro - andres</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,
100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,
500;1,700;1,900&display=swap" 
rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">    
</head>
<body>
    
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿ya tienes cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrarse para que puedas iniciar sesion </p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--formulario de login y registro-->
            <div class="contenedor__login-register">
                <!--login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="correo electronico" name="correo">
                    <input type="password" placeholder="contraseña" name="password">
                    <button>Entrar</button>
                </form>
                <!--registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="Nombre_completo"> 
                     <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="contraseña" name="password">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    
    <script src="scrips.js"></script>
</body>
</html>
