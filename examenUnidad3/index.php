<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	<title>Clase</title>
	<style type="text/css">
		.super_div{
			width: 100%;
			height: 500px;
			background-color: #D5D8DC;
		}
		.mini_div{
			width: 30%;
			margin: 1%;
			border-radius: 5px;
			border-width: 1px;
			border-style: solid;
			border-color: black;
			height: 300px;
			float: left;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>

	<div class="super_div">
		<h1>Aquí no hay nada</h1>
		<center>
			<form id="formulario">
				<fieldset style="width: 40%;">
					<legend>
						Datos del usuario
					</legend>
					<label> email: </label>
					<input type="text" style="width: 100%;height: 40px;" name="email" id="email" value="" placeholder="">

					<label>contraseña</label>

					<input type="text" style="width: 100%;height: 40px;" name="password" id="password" value="" placeholder="">

					<label>año de nacimiento</label>

					<input type="text" style="width: 100%;height: 40px;" name="year" id="year" value="" placeholder="">

					<button type="button" id="guardar_info"> Guardar regisro</button>
				</fieldset>
			</form>
		
			
		</center>
		<h1 id="edad_h1">  </h1>
	</div>

  

<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
      $("#guardar_info").click(function() {
                    var email= $("#email").val();
                    var password= $("#password").val();
                    var year= $("#year").val();

                    $.ajax({
                        url: "file.php",
                        data: {email:email, password:password, year:year},
 						type: "POST",
 						dataType: "text",
                        success: function(r) {
                           console.log(r);
                           alert("registro guardado");
                        }
                    });


                });
        });
</script>
</body>
</html>