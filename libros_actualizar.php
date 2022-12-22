<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Libros</title>
	<link rel="stylesheet" media="screen" href="css/estiloActualizar.css" >
</head>
<body>
	<div class="form-table">
		<div class="form-header">
			<h2>Libros que se van a actualizar</h2>
		</div>
		<table>
			<thead>
				<?php
					ini_set("display_errors",true);
					require_once 'funcionesBaseDatos.php';
					if(isset($_POST["actualizar"]))
					{
						$librosprecios = $_POST["librosprecios"];
						$precio = $_POST["precio"];
						modificarLibroMySQLi($librosprecios, $precio);
						echo "<div class='aviso'>Actualizados los precios</div>";
					}
					else{
						echo "NO recibo campo ' actualizar'";
					}
				?>
				<label for="libro">Libros:*</label>
				<select class="form-desp" name="libro">
					<?php
						$libros = getLibrosTitulo();
						foreach ($libros as $libro) 
						{
						    echo "<option value='$libro'";
						    if (isset($_POST['libro']) && $libro == $_POST['libro'])
                        	    echo " selected='true'";
						    echo ">$libro</option>";
						}
		    		?>
				</select>	
				<button class="form-btn" type="submit" name="mostrar">Mostrar</button>
				<?php
					if (isset($_POST['mostrar'])) 
					{
				?>
			</thead>
		</table>
			<form id="actualizarPrecio" method="post" action="">
				<table>
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
							echo "<input type='hidden' name='libro' value='{$_POST['libro']}'>"; //Para que se mantenga al recargar la página
							echo "<tr>"."<input type='hidden' name='librosprecios[]' value='{$libroprecio['numero_ejemplar']}'>";
							echo "<td>".$libroprecio["titulo"]."</td>";
							echo "<td><input type='text' size='4' name='precio[]' value='{$libroprecio['precio']}'> Euros </td></tr>";
						}
					?>
					</tbody>
				</table>
				<button class="form-btn" type="submit" name="actualizar">Actualizar</button>
			</form>
			<?php
				}
			?>	
			<a class="form-enlace" href="index.php">Volver</a>
		</div>
	</body>
</html>