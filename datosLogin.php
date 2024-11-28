<?php 
	include("conexion.php");
	if (isset($_POST['Iniciar'])) {
		$correo=trim($_POST['email']);
		$password=trim($_POST['password']);
		$consulta="SELECT * FROM clientes WHERE correo='$correo' AND password='$password'";
		$resultado=mysqli_query($conexion,$consulta);
		$usuario=mysqli_fetch_assoc($resultado);
		$nombre=$usuario["nombre"];

		if (mysqli_num_rows($resultado)>0) {
			echo "<script>alert('Bienvenido $nombre'); window.location.href='tienda.php';</script>";
		}
		else{
			echo "<script>alert('Cuenta no Existente'); window.history.go(-1);</script>";
		}
	}
 ?>