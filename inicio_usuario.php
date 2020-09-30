<!DOCTYPE html>
<html>
	<head>
		<title> INICIO USUARIO </title>
		<meta charset="utf-8">
		<!-- CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<!-- JAVASCRIPT -->
		<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/inicio_usuario.js"></script>
	</head>
	<body style="background: url('img/imagen_fondo.jpg'); background-size: cover;">
		<div class="col-sm-12" style="padding: 10px; background-color: rgba(255,255,255,0.7);">
			<table class="table table-bordered ">
				<thead class="table-dark">
					<tr class="center">
						<th colspan="2"> <input class="form form-control" type="text" name="" id="campo_busqueda" required placeholder="INGRESA CRITERIO BUSQUEDA."> </th>
						<th colspan="6"> <button class="btn btn-primary float-left">BUSCAR</button> </th>
					</tr>
					<tr class="center">
						<th>N°</th>
						<th>CEDULA</th>
						<th>NOMBRES</th>
						<th>APELLIDOS</th>
						<th>DIRECCION</th>
						<th>TELEFONO</th>
						<th>TIPO</th>
						<th>OPCIONES</th>
					</tr>
				</thead>
				<tbody id="tabla_clientes">
					
				</tbody>
			</table>
		</div> 
	</body>
</html>