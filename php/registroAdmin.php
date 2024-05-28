<!-- Creamos el registro del formulario de admin en la base de datos y nos da la alerta de que se registró de manera correcta -->

<?php

$servidor = "localhost";
$usuario = "root";
$Clave = "";
$bd = "formularioregistro";

$conexion = mysqli_connect($servidor, $usuario, $Clave, $bd);

if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $clave= $_POST['clave'];

    $guardar = "INSERT INTO registroadmin VALUES ('$nombre', '$usuario', '$clave')";

    $ejecutar = mysqli_query ($conexion,$guardar);

}

echo "<script>
alert('Administrador creado correctamente');</script>";

//Se direcciona a la página del Login una vez mostrado el alert anterior
echo "<script>window.location.href='http://localhost/dashboard/ProyectoFinal/ProyectoFinal/login.html';</script>";
?>