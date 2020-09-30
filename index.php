<!DOCTYPE html>
<html>
	<head>
		<title> INICIO SESION </title>
		<meta charset="utf-8">
		<!-- CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<!-- JAVASCRIPT -->
		<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/sesion.js"></script>
	</head>
	<body style="background: url('img/imagen_fondo.jpg'); background-size: cover;">
		<div class="col-sm-3" style="position: absolute; top: 25%; left:30%; min-width: 40%; ">
			<div class="panel_cargando" id="carga_registro" style="display:none; position: absolute; top:0%; background-color: rgba(255,255,255, 0.8) !important; width: 100%; height: 100%;">
				<img src="img/cargando.gif" style="position: absolute; top: 15%;">
			</div>
			<form action="#" method="POST" id="formulario_ingreso">
				<table class="table table-bordered" style="background-color: rgba(255,255,255,0.7);">
					<thead>									
						<tr>
							<th colspan="2">
								<h1 class="center">INICIAR SESION</h1>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="center">CEDULA</td>
							<td><input class="form form-control" type="number" name="" id="campo_cedula" required ></td>
						</tr>
						<tr>
							<td class="center">CONTRASEÑA</td>
							<td><input class="form form-control" type="password" name="" id="campo_password" required autocomplete="off" ></td>
						</tr>
						<tr>
							<td id="mensaje_creacion"> 

							</td>
						</tr>
						<tr>
							<td class="center" colspan="2">
								<center >
									<input id="btn_submit_ingresar" type="submit" class="btn btn-success" value="INGRESAR">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
									  REGISTRARSE
									</button>
								</center>
								
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>



		<!-- Modal -->
		<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        
		      		<form class="row" action="#" method="POST" id="formulario_registro">
		      		  <div class="form-group col">
		      		    <label for="cedula">Cedula</label>
		      		    <input type="number" class="form-control" id="cedula" name="cedula" required>   
		      		  </div>
		      		  <div class="form-group col">
		      		    <label for="nombres">Nombres</label>
		      		    <input type="text" class="form-control" id="nombres" name="nombres" required>   
		      		  </div>
		      		  <div class="w-100"></div>
		      		  <div class="form-group col ">
		      		    <label for="apellidos">Apellidos</label>
		      		    <input type="text" class="form-control" id="apellidos" name="apellidos" required>   
		      		  </div>
		      		  <div class="form-group col ">
		      		    <label for="direccion">Direccion</label>
		      		    <input type="text" class="form-control" id="direccion" name="direccion" required>   
		      		  </div>
		      		  <div class="w-100"></div>
		      		  <div class="form-group col ">
		      		    <label for="departamento">Departamento</label>
		      		    <input type="text" class="form-control" id="departamento" name="departamento" required>   
		      		  </div>
		      		  <div class="form-group col ">
		      		    <label for="municipio">Municipio</label>
		      		    <input type="text" class="form-control" id="municipio" name="municipio" required>   
		      		  </div>
		      		  <div class="w-100"></div>
		      		   <div class="form-group col ">
		      		    <label for="telefono">Telefono</label>
		      		    <input type="text" class="form-control" id="telefono" name="telefono" required>   
		      		  </div>
		      		   <div class="form-group col ">
		      		    <label for="email">Email</label>
		      		    <input type="text" class="form-control" id="email" name="email" required>   
		      		  </div>
		      		  <div class="w-100"></div>
		      		  <div class="form-group col ">
		      		    <label for="password">Contraseña</label>
		      		    <input type="password" class="form-control" id="password" name="password" required autocomplete="off">
		      		  </div>
		      		  <div class="w-100"></div>
		      		  <br><br>
		      		  <div class="modal-footer" >
		      		    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		      		    <button type="submit" class="btn btn-primary" id="btn_submit_registrar">Registrar</button>
		      		  </div>
		      		  
		      		</form>

		      </div>
		     
		    </div>
		  </div>
		</div>
	</body>
</html>