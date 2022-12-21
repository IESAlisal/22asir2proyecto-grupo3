<?php 
include_once 'funcionesBaseDatos.php';
if(isset($_POST['borrar']) && isset($_POST["libro"]))
{
	$mensaje = borrarLibroMySQLi($_POST['libro']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Borrar libros</title>
	<link rel="stylesheet" media="screen" href="css/estiloBorrar.css" >
</head>
	<body>
		<form class="formulario" action="" method="post" name="formulario">
			<ul>
				<li>
					<label for="libro">Libro:</label>
						<select name="libro">
							<?php
							
							$libros = getLibros();

							foreach($libros as $libro)
							{
								echo "<option value='{$libro->numero_ejemplar}'";
								echo ">{$libro->titulo} (año {$libro->anyo_edicion})</option>";
							}
								
							?>
						</select>
				</li>
			</br>
				<li>
					<button class="submit" type="submit" name="borrar">Borrar</button>
				</br>
					<?php 
					if(isset($mensaje))
					{
						echo "<div class='aviso'>El precio del libro borrado era $mensaje €</div>";
					}
				?>
				</li>
			</br>
				<a href="libros_MySQLi.php">Volver</a>
			</ul>
		</form>
	</body>
</html>