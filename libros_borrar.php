<?php 
include_once 'funcionesBaseDatos.php';
if(isset($_POST['borrar']))
{
	$mensaje = borrarLibro($_POST['libro']);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Borrar libros</title>
		<!-- Fuente -->
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
		<!-- CSS Animado -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<link rel="stylesheet" media="screen" href="css/estiloBorrar.css" >
	</head>
	<body>
		<div class="form-table">
			<div class="form-header">
				<h1>Borrar libros</h1>
			</div>
			<table>
				<thead>
					<form class="formulario" action="" method="post" name="formulario">
						<label class="form-label" for="libro">Libro:</label>
						<select class="form-desp" name="libro">
							<?php
							
							$libros = getLibros();

							foreach($libros as $libro)
							{
								echo "<option value='{$libro->numero_ejemplar}'>";
								echo "{$libro->titulo} (año {$libro->anyo_edicion})</option>";
							}
								
							?>
					</select>
					<button class="form-btn" type="submit" name="borrar">Borrar</button>
					<?php 
						if(isset($mensaje))
						{
						echo "<div class="aviso">El precio del libro borrado era $mensaje €</div>";
						}
					?>
					</form>
				</thead>
				</br>
				<a class="form-enlace" href="index.php">Volver</a>
			</table>
		</div>
	</body>
</html>