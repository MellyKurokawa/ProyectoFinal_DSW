
<!-- En este código verifica si el usuario que va a ingresar en el login del admin, ya está registrado, si lo está accederá a la ventana de mostrar clientes, si no arrojará la alerta de que es incorrecto y volverá al login -->
<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "formularioregistro") or die("Problemas con la conexión");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

if (isset ($_POST['clave'])){ 
 
    $usuario=$_POST['usuario'];
    
    $clave=$_POST['clave']; 
    $registros = mysqli_query($conexion, "SELECT clave, usuario FROM registroadmin WHERE clave='{$_REQUEST['clave']}' AND usuario='{$_REQUEST['usuario']}'"); 
    
    if ($reg= mysqli_fetch_array ($registros)){
           echo "<br><br>";
           header('Location: mostrarClientes.php');
        
        
        
                
                
            }else{
                echo "<script> alert('El usuario o contraseña son incorrectos');</script>";
                echo "<script>window.location.href='http://localhost/dashboard/ProyectoFinal/ProyectoFinal/login.html';</script>";
 
            }
    }
            
        
?>


