<!-- Creamos el registro del formulario en la base de datos y nos da la alerta de que se registró de manera correcta -->
<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "formularioregistro";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $ciudad = $_POST['ciudad'];
    $celular = $_POST['celular'];
    $transporte = $_POST['transporte'];
    $comentarios = $_POST['comentarios'] && !empty(trim($_POST['comentarios'])) ? trim($_POST['comentarios']) : "NINGUNO";
    $camisa = $_POST['camisa'];
    $talla = $_POST['talla'];

    $guardar = "INSERT INTO registrovacacional VALUES ('', '$nombre', '$apellidos', '$edad', '$sexo', '$ciudad', '$celular', '$transporte', '$comentarios', '$camisa', '$talla')";

    $ejecutar = mysqli_query ($conexion,$guardar);

}

echo "<script>
alert('Se ha registrado correctamente');</script>";
echo "<script>window.location.href='http://localhost/dashboard/ProyectoFinal/ProyectoFinal/menu.html';</script>";

?>