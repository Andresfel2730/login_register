<?php

include 'conexion_be.php';

$Nombre_completo = $_POST['Nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

//encriptar password
$password = hash('sha512', $password);



$query = "INSERT INTO usuarios(Nombre_completo, correo, usuario, password)
          VALUES('$Nombre_completo', '$correo', '$usuario', '$password')";

//verificar correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
       alert("este correo ya esat registrado,intenta con otro diferente");
       window.location = "../index1.php";
    </script>
    ';
    exit();
}
//verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$usuario' ");
if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
       alert("este usuario ya esta registrado,intenta con otro diferente");
       window.location = "../index1.php";
       </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo '
        <script>
               alert("usuario almacenado exitosamente");
               window.location = "../index1.php";
        </script>          
    ';
}else{
     echo '
      <script>
         alert("intentalo de nuevo,usuario no almacenado ");
         window.location = "../index1.php";
      </script>    
    ';
}

mysqli_close($conexion);
?>

