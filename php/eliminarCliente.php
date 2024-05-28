
<!-- Aquí nos permite borrar al usuario que se encuentra registrado en la base de datos -->
<?php
$conexion = mysqli_connect("localhost", "root", "", "formularioregistro") or die("Problemas con la conexion");

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    mysqli_query($conexion, "DELETE FROM registrovacacional WHERE nombre ='$nombre'")or die("Problemas en el select:". mysqli_error($conexion));
    mysqli_close($conexion);
    
    echo "<script>alert('El cliente $nombre ha sido eliminado.')</script>";
    echo "<script>window.location.href='mostrarClientes.php';</script>";
}
?>