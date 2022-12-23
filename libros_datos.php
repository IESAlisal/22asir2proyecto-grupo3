<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Listado de libros Grupo3</title>
		<!-- Fuente -->
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
    	<!-- CSS Animado -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<link rel="stylesheet" media="screen" href="css/estiloDatos.css" >
	</head>
	<body>
		<div class="form-table">
			<div class="form-header">
				<h2>Libros actuales</h2>
			</div>
			<table>
				<thead>
					<tr class="form-fila">
						<th>Número de ejemplar</th>
						<th>Título</th>
						<th>Año de edición</th>
						<th>Precio</th>
						<th>Fecha de adquisición</th>
					</tr>
				</thead>
				<tbody>
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
				</tbody>
			</table>
			</br>
			<a class="form-enlace" href="libros_alta.php">Volver</a>
		</div>
	</body>
</html>
