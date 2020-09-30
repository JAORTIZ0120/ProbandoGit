<?php 
	
	// Obteniendo los datos del AJAX - Sacandolos del POST
	$cedula = $_POST['dato1'];
	$nombres = strtoupper($_POST['dato2']);
	$apellidos  = strtoupper($_POST['dato3']);
	$direccion = strtoupper( $_POST['dato4']);
	$departamento = strtoupper( $_POST['dato5']);
	$municipio = strtoupper( $_POST['dato6']);
	$telefono = strtoupper($_POST['dato7']);
	$email = strtoupper($_POST['dato8']);
	$password = strtoupper( $_POST['dato9']);
	
	// Cargar conexion a base de datos
	include 'conexion.php';

	// Ya se puede usar la variable de la base de datos  $conexion
	$consulta = $conexion->prepare("INSERT INTO personas(cedula, nombres, apellidos, direccion, departamento, municipio, telefono, email) VALUES( ?, ?, ?, ?, ?, ?, ?, ? )");
	$consulta->bindParam(1, $cedula);
	$consulta->bindParam(2, $nombres);
	$consulta->bindParam(3, $apellidos);
	$consulta->bindParam(4, $direccion);
	$consulta->bindParam(5, $departamento);
	$consulta->bindParam(6, $municipio);
	$consulta->bindParam(7, $telefono);
	$consulta->bindParam(8, $email);

	// Ejecutamos la consulta y confirmamos si se inserto adecuadamente.
	if ($consulta->execute()) {
		$datos['estatus'] = 'OK##INSERTAR##DATOS';
		echo json_encode($datos);
		die();
		
	}else{
		$datos['estatus'] = 'ERROR##INSERTAR##DATOS';
		$datos['mensaje'] = 'No se permitio el registro del usuario, revise los datos e intente nuevamente. (Es posible que la cedula este registrada previamente.)';
		$datos['valor_objeto'] = $consulta;
		echo json_encode($datos);
		die();
	}


	
?>