<?php 
	include("conexion.php");
	if (isset($_POST['Donar'])&&isset($_POST['Materiales'])&&isset($_POST['Centro'])) {
		$Materiales=trim($_POST['Materiales']);
		$Centro=trim($_POST['Centro']);
		$Cantidad=trim($_POST['cantidad']);

		$donar="INSERT INTO donaciones()"
	}
 ?>