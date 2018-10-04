<?php 

	include("conexion_bd.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel de revistas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

	<link rel = "stylesheet" type = "text/css" href = "estilos/styles.css">

</head>
<body>

	<div class = "w3-container">

		<header class="color1">
		<div class = "row">

			<div id = "div_logo" class  = "col-md-2">
				<img class = "logo" src = "estilos/icons/logo.png">
			</div>
			<div class  = "col-md-2">
				<h1 class="centrar"> Inicio </h1>
			</div>
			<div class  = "col-md-2">
				<h1 class="centrar"> Temáticas </h1>
			</div>
			<div class  = "col-md-2">
				<h1 class="centrar"> Contactos </h1>
			</div>
			<div class  = "col-md-1">
				<img class = "imgIconRed" src = "estilos/icons/icon_ubicacion_b.png">
			</div>
			<div class  = "col-md-1">
				<img class = "imgIconRed" src = "estilos/icons/icon_facebook_b.png">
			</div>
			<div class  = "col-md-1">
				<img class = "imgIconRed" src = "estilos/icons/icon_linkeid_b.png">
			</div>
		</div>
		</header>
		<div class = "row">
			<div class = "col-md-1"> </div>
			<div class  = "col-md-4">
					<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
					<h2> <b> Suscríbete a tus revistas favoritas por tan solo 29.000 al mes </b> </h2>
					<p class = "centrar" >para que no te pierdas ningún detalle de los mejores contenidos </p>
				</div>
				<div class  = "col-md-6">
					<img class = "imgMedia" src = "estilos/icons/social_media.png">
				</div>
				<div class = "col-md-1"> </div>
			</div>
			<header class="color2">
			<div class = "row">
				<div class = "col-md-2">
				</div> 
				<div class = "col-md-8">
					<h3 class="centrar"> Podrás leer tus revistas desde cualquier lugar, en cualquier dispositivo </h3>
				</div> 
				<div class = "col-md-2">
				</div> 
			</div>
			</header>

		<div class = "row">
			
			<div class = "col-md-6">

				<div class = "col-md-2"> </div>

				<div class = "col-md-10"> 

						<br /> <br /> <br /> <br /> <br /> <br />
					<h4 class="centrar"> <b> Conoce si te encuentras registrado en nuestro sistema </b> </h4>	
					<br /> <br />
					<input type="text" class="form-control, inputs" placeholder="Número de Identificación" name="search" id="search">
					<br /> <br />
				    <button type="submit"  class="btn btn-danger" id = "Buscar"> <b> Buscar </b> </button>		

				    <br /> <br /> <br /> <br /> <br /> <br />

					<h4 class="centrar"> <b> Suscribirme a una revista </b> </h4>	
					<br />

				    <input type="text" class="form-control, inputs" placeholder="Número de Identificación" id="identification_sus">
					<br /> <br />
					<select class="form-control, inputs" id="magazine">
						<option value="#">Seleccionar una revista</option>
				      	<?php 
							while($valores = mysqli_fetch_array($queryRevista))
							{
								echo '<option value="'.$valores['id_revista'].'">'.$valores['nombre_revista'].'</option>';
							}
						?> 
				    </select>
				   	<br /> <br />

				    <button type="submit"  class="btn btn-danger" id = "Suscribirme"> <b>  Suscribirme </b> </button>	

				</div>


				<img class = "todoRevistas" src = "estilos/icons/todoRevista.png">

			</div>

			<div class  = "col-md-5" id = "idea">
				<img class = "imgIdea" src = "estilos/icons/bombillo.png">
				<h5 class="centrar"> <b> No te encuentras registrado, no puedes realizar la suscripción, completa el formulario de registro para continuar </b> </h5>
				<br/ > <hr/ > <br/ >

				<div class = "row">
					<div class  = "col-md-12">
						<h4 class ="centrar"> <b> Registrate en nuestro sistema</b> </h4>
						<p class = "centrar"> Aplica para usuario que no se encuentran registrados previamente </p>

					</div>
					
				</div>
				<div class = "row">
					<div class = "col-md-6"> 
						<br />
    					<input type="text" class="form-control" placeholder="Número de Identificación" id="identification">
    					<br />
    					<input type="text" class="form-control" placeholder="Apellido" id="last_name">
    					<br />
    					<input type="text" class="form-control" placeholder="Edad" id="age">
    					

					</div>
					<div class = "col-md-6">
						<br />
    					<input type="text" class="form-control" placeholder="Nombre" id="first_name">
    					<br />
    					<input type="text" class="form-control" placeholder="Correo electrónico" id="email">
    					<br />
						<select class="form-control" id="city">
							<option value="#">Seleccionar una ciudad</option>
							<?php 
								while($valores = mysqli_fetch_array($queryCiudad))
								{
									echo '<option value="'.$valores['cod_ciudad'].'">'.$valores['nombre_ciudad'].'</option>';
								}
							?>
					    </select>
					</div>

				</div>
				<div class = "row">
					<div class = "col-md-8">
						<br />
						<p id = "condiciones">Al hacer clic en “registrarme” estoy aceptando los términos y condiciones, políticas de datos y cookies </p>
					</div>
					<div class = "col-md-4">
						<button type="submit" class="btn btn-danger" id = "Registrarse" > <b> Registrarse </b> </button>
					</div>
				</div>
				<br /> <br /> <br /> <br />
				<div class = "row">
					
					<div class = "col-md-2">
						<p id = "condiciones"> Aliados: </p>
					</div>
					<div class = "col-md-2">
						<img class = "aliados" src = "estilos/icons/cromos.png">
					</div>
					<div class = "col-md-2">
						<img class = "aliados" src = "estilos/icons/fucsia.png">
					</div>
					<div class = "col-md-2">
						<img class = "aliados" src = "estilos/icons/jetset.png">
					</div>
					<div class = "col-md-2">
						<img class = "aliados" src = "estilos/icons/dinero.png">
					</div>
					<div class = "col-md-2">
						<img class = "aliados" src = "estilos/icons/semana.png">
					</div>

				</div> 

			</div>
			<div class = "col-md-1"> </div>
			
		</div>

	</div>
	<script type="text/javascript" src="subject.js"></script>
</body>
</html>