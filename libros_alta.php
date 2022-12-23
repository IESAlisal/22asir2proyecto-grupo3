<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Alta de libros</title>
		<!-- Fuente -->
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
		<!-- CSS Animado -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<link rel="stylesheet" media="screen" href="css/estiloAlta.css" >
	</head>
	<body>
		<div class="form-box">
			<h1 class="form-title">INSERTE LOS DATOS DEL <span>LIBRO</span></h1>
			<div class="datos-wrapper">
				<div class="datos-form">
					<h3>Añade la informacion del libro</h3>
					<span class="mensaje_obligatorio">* Campo obligatorio</span>
					<form class="formulario" method="post" action="libros_guardar.php" name="formulario">
						<p>
							<label for="titulo">Titulo:*</label>
							<input type="text" name="titulo" required>
						</p>
						<p>
							<label for="anyo">Año de edición:*</label>
							<input type="number" name="anyo" min="1900" max="2100" required>
						</p>
						<p>
							<label for="precio">Precio:*</label>
							<input type="number" name="precio" step="any" required>
						</p>
						<p>
							<label for="adquisicion">Fecha de adquisición:*</label>
							<input type="date" name="adquisicion" required>
						</p>
						<p class="block">
							<button class="submit" type="submit" name="guardar">
								Guardar datos del libro
							</button>
						</p>
					</form>
				</div>
				<div class="datos-img">
					
					<a href="libros_datos.php">Mostrar los libros guardados</a>
					</br>
					<a href="index.php">Volver</a>
				</div>
			</div>
		</div>
	</body>
</html>




