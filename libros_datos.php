<!DOCTYPE html>
<html>
	<head>
		<title>Guardar libros</title>
		<link rel="stylesheet" media="screen" href="css/estiloTabla.css" >
	</head>
	<body>
		<table class="form-table">
			<tr class="form-fila">
				<th>Número de ejemplar</th>
				<th>Título</th>
				<th>Año de edición</th>
				<th>Precio</th>
				<th>Fecha de adquisición</th>
			</tr>

		<?php
		require_once 'funcionesBaseDatos.php';

		$libros = getLibros();
		foreach($libros as $libro)
		{
			echo "<tr>\n";
			echo "<td>{$libro->numero_ejemplar}</td>";
			echo "<td>{$libro->titulo}</td>";
			echo "<td>{$libro->anyo_edicion}</td>";
			echo "<td>{$libro->precio}</td>";
			echo "<td>{$libro->fecha_adquisicion}</td>";
			echo "</tr>\n";
		}
		?>
		</table>
		<br>
		<a href="libros_alta.php">Volver</a>
	</body>
</html>
