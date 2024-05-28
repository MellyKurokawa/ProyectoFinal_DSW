
<style>

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Alkatra&family=Poetsen+One&family=Roboto+Slab&family=Sedgwick+Ave+Display&family=Stint+Ultra+Condensed&family=Varela+Round&display=swap');

h1{
    font-family: 'Domine';
    color:  black; 
    font-size: 25px;
	font-family: "Poetsen One", sans-serif;
}

body{
  background-image: url("../imagenes/fish.jpg");
  background-size: center;
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  margin: 20px;
  padding: 0px;
  
}

table{
  margin: auto;
  background: rgba(255, 255, 255, 0.744);
  border-radius: 10px;
  border-spacing: 10px;
  padding-left: 5px;
  padding-right: 5px;
  color: #FF2588;
}

/* Sirve para dar transición al botón de la página */
.regresar{
  background-color: #DC146F;
  -webkit-transition: background-color 1s linear;
  transition: background-color 1s linear;
  font-size: 15px;
  color: white;
}
/* Sirve para dar trancisión al botón, es el que cambia de color */
.regresar:hover{
  background-color: #ECB7CF;
}
	</style>


<html>
<head>
    <meta charset='utf-8'>
	<title>Clientes registrados</title>

</head>
<script type="text/javascript">
	function confirmar(){
		return confirm('¿Seguro que desea eliminar los datos del cliente?');
	}

</script>

<body align="center">
<!-- En este código de php hacemos conexión con la base de datos del registro vacacional -->
	<?php

		$conexion = mysqli_connect("localhost","root","","formularioregistro") or die("Problemas con la conexion");
		$sql="SELECT * FROM registrovacacional";	
		$resultado = mysqli_query($conexion,$sql)

	?>
	<!-- Creamos la tabla que contendrá los registros de la base de datos -->
    <html>
	<h1>Administración de los clientes</h1>
	<h2>Marta's Travel</h2>
	<br>

	<table border ="2", bordercolor= "white", cellspacing="1", cellpadding="7" align="center">
		<thead>
			<tr bgcolor="pink">
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Edad</th>
			<th>Sexo</th>
            <th>Ciudad</th>
			<th>Celular</th>
			<th>Transporte</th>
			<th>Comentarios</th>
            <th>Camisa</th>
            <th>Talla</th>
			</tr>
		</thead>
		<tbody>

		<?php
		while($registrovacacional = mysqli_fetch_assoc($resultado)){
		?>
		<!-- Se muestran los registros de la base de datos en la tabla -->
			<tr>
               
				<td><?php echo $registrovacacional['nombre']?></td>
				<td><?php echo $registrovacacional['apellido']?></td>
				<td><?php echo $registrovacacional['edad']?></td>
				<td><?php echo $registrovacacional['sexo']?></td>
                <td><?php echo $registrovacacional['ciudad']?></td>
				<td><?php echo $registrovacacional['celular']?></td>
				<td><?php echo $registrovacacional['transporte']?></td>
                <td><?php echo $registrovacacional['comentarios']?></td>
                <td><?php echo $registrovacacional['camisa']?></td>
                <td><?php echo $registrovacacional['talla']?></td>
				
				<!-- Se despliega la alera de que se ha borrado el usuario con cierto nombre -->
                <td><?php echo "<a href='eliminarCliente.php?nombre=".$registrovacacional['nombre']."' onclick='return confirmar()'>Eliminar</a>";?></td>
			</tr>
			<?php
			 }
			?>
		</tbody>
	</table>
	<br>

	<form action="http://localhost/dashboard/ProyectoFinal/ProyectoFinal/login.html" method="post">
                <input type="submit" class="regresar" value="Cerrar sesión">
            </form>
</body>
</html>

