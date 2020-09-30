$(document).ready(function() {
	
		$("#formulario_registro").submit(function(event) {	
			event.preventDefault(); // -> Para evitar el redireccionamiento a otro archivo por medio formulario.

			// Obtener los datos de los inputs
			cedula = $("#cedula").val();
			nombres = $("#nombres").val().toUpperCase();
			apellidos = $("#apellidos").val().toUpperCase();
			direccion = $("#direccion").val().toUpperCase();
			departamento = $("#departamento").val().toUpperCase();
			municipio = $("#municipio").val().toUpperCase();
			telefono = $("#telefono").val().toUpperCase();
			email = $("#email").val().toUpperCase();
			password = $("#password").val().toUpperCase();
			

			// Deshabilitamos el formulario mientras llega la respuersta del servidor
			$("#btn_submit_registrar").attr('disabled', true);

			// Enviar los datos al servidor por medio de AJAX
			 if( cedula!="" && nombres!="" && apellidos!="" && direccion!="" && departamento!="" && municipio!="" && telefono!="" &&email!="" && password!="" ){
				
				// Enviar datos al servidor - AJAX
				$.ajax({
					url: 'php/registrarCliente.php',
					type: 'POST',
					dataType: 'json',
					data: { dato1:cedula, dato2:nombres, dato3:apellidos, dato4:direccion, dato5:departamento, dato6:municipio, dato7:telefono, dato8:email, dato9:password }
				})
				.done(function(datos) {
					console.log("success servidor: ");
					console.log(datos);

					if(datos['estatus']=="ERROR##CONEXION##BASEDATOS"){
						// Codigo en caso de que fallara por conexion a base de datos.
						console.log("Error en el Servidor: ");
						console.log(datos['mensaje']);
						alert("Se ha presentado un error en el servidor, si el error persiste debe comunicarse con un Administrador.");
					}else if(datos['estatus']=="ERROR##INSERTAR##DATOS"){
						// Codigo en caso de que la consulta insert no se pueda ejecutar
						console.log("Error en consulta: ");
						console.log(datos["valor_objeto"]);
						alert(datos['mensaje']);
					}else if(datos['estatus']=="OK##INSERTAR##DATOS"){
						// Codigo en el caso de insertar correctamente

						// Crear la nueva fila
						confirmacion = $("#mensaje_creacion");
						texto_html  = "<div class='alert alert-success' role='alert'> Persona registrada con exito</div>";
					
						confirmacion.prepend( texto_html );

						// Limpiar el formulario
						$("#campo_cedula").val("");
						$("#campo_nombre").val("");
						$("#campo_apellidos").val("");
						$("#campo_direccion").val("");
						$("#campo_telefono").val("");
						$("#select_tipo").val(" ----- ");
						$("#campo_cedula").focus();
					}

				})
				.fail(function(datos) {
					console.log("Error servidor: ");
					console.log(datos);
				})
				.always(function() {
					// Habilitamos el formulario despues de que llega la respuesta del servidor.
					$("#carga_registro").hide();
					$("#btn_submit_registrar").removeAttr('disabled');
				});
				
				
				
			}else{
				alert("Revisa los datos, todos son obligatorios.");
			}
		});
	});

