<?php 
	include("conexion.php");
	if (isset($_POST['Enviar'])) {
		$nombre=trim($_POST['nombre']);
		$correo=trim($_POST['email']);
		$celular=trim($_POST['celular']);
		$password=trim($_POST['password']);
	}
	$verificar_usuario=mysqli_query($conexion,"SELECT * FROM clientes WHERE correo='$correo'");
	if (mysqli_num_rows($verificar_usuario)>0) {
		echo "<script> alert('Ya Existe Una Cuenta Con Ese Correo'); window.history.go(-1); </script>";
		exit;
	}
	else{
		$insertar="INSERT INTO clientes(nombre,correo,celular,password)VALUES('$nombre','$correo','$celular','$password')";
		$resultado=mysqli_query($conexion,$insertar);
		if (!$resultado) {
			echo "ERROR";
		}
		else{
			echo "<script>alert('REGISTRO EXITOSO'); window.location='tienda.php'; </script>";
		}
	}
	mysql_free_result($resultado);
	mysql_close($conexion);
 ?>