<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Actualizar la tabla de libros</title>
		<!-- Fuente -->
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
		<!-- CSS Animado -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<link rel="stylesheet" media="screen" href="css/estiloActualizar.css" >
	</head>
	<body>
		<div class="form-table">
			<div class="form-header">
				<h1>Libros que se van a actualizar</h1>
			</div>
			<table>
				<thead>
					<label class="form-label" for="libro">Libros:*</label>
					<select class="form-desp" name="libro">
						<?php
							$libros = getLibrosTitulo();
							foreach ($libros as $libro) 
							{
								echo "<option value='$libro'>";
								if (isset($_POST['libro']) && $libro == $_POST['libro'])
									echo " selected='true'";
								echo "$libro</option>";
							}
						?>
					</select>	
					<button class="form-btn" type="submit" name="mostrar">Mostrar</button>
					<?php
						if (isset($_POST['mostrar'])) 
						{
					?>
				</thead>
					<?php
						ini_set("display_errors",true);
						require_once 'funcionesBaseDatos.php';
						if(isset($_POST["actualizar"]))
						{
							$librosprecios = $_POST["librosprecios"];
							$precio = $_POST["precio"];
							modificarLibroMySQLi($librosprecios, $precio);
							echo "<div class="aviso">Actualizados los precios</div>";
						}
						else{
							echo "<div class="aviso">actualizar</div>";
						}
					?>
			</table>
				<table>
					<form id="actualizarPrecio" method="post" action="">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Precio</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$libro = $_POST['libro'];
							$librosprecios = getLibrosPrecio($libro);
							foreach ($librosprecios as $libroprecio) 
							{
								echo "<input type='hidden' name='libro' value='{$_POST['libro']}'>"; 
								echo "<tr>"."<input type='hidden' name='librosprecios[]' value='{$libroprecio['numero_ejemplar']}'>";
								echo "<td>".$libroprecio["titulo"]."</td>";
								echo "<td><input type='text' size='4' name='precio[]' value='{$libroprecio['precio']}'> Euros </td></tr>";
							}
						?>
					</tbody>
					</form>
				</table>
			<button class="form-btn" type="submit" name="actualizar">Actualizar</button>
			<?php
				}
			?>	
			<a class="form-enlace" href="index.php">Volver</a>
		</div>
	</body>
</html>