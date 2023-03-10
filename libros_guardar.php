<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Guardar libros Grupo3</title>
        <!-- Fuente -->
	    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
        <!-- CSS Animado -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="css/estiloGuardar.css">
    </head>
    <body>
        <div class="form-table">
            <div class="form-header">
            <?php
                include_once 'funcionesBaseDatos.php';


                function estaVacio($campo, $valor)
                {
                    $vacio = false;
                    if ($valor == "")
                    {
                        echo("<div class='error'>Falta el campo $campo</div>");
                        $vacio = true;
                    }
                    return $vacio;
                }


                $todoOK = true;
                if (isset($_POST['titulo']))
                {

                    $titulo = $_POST['titulo'];
                    if(!estaVacio("título", $titulo))
                        echo "El título es $titulo <br/>";
                    else
                        $todoOK = false;
                }

                if (isset($_POST['anyo']))
                {
                    $anyo = $_POST['anyo'];
                    if(!estaVacio("año", $anyo))
                        echo "El año es $anyo <br/>";
                    else
                        $todoOK = false;
                }

                if (isset($_POST['precio']))
                {
                    $precio = $_POST['precio'];
                    if(!estaVacio("precio", $precio))
                        echo "El precio es $precio <br/>";
                    else
                        $todoOK = false;
                }


                if (isset($_POST['adquisicion']))
                {
                    $adquisicion = $_POST['adquisicion'];
                    if(!estaVacio("fecha de adquisición", $adquisicion))
                    {
                        list($year, $mon, $day) = explode('-', $adquisicion);

                        if (checkdate($mon, $day, $year))
                            echo "La fecha de adquisición es $adquisicion <br/>";
                        else
                        {
                            echo "<div class='error'>Fecha incorrecta<br></div>";
                            $todoOK = false;
                        }
                    }
                    else
                        $todoOK = false;

                }

                if ($todoOK)
                {
                    if(insertarLibroMySQLi($titulo, $anyo, $precio, $adquisicion))
                        echo "<div class='aviso'>Datos guardados correctamente</div>";
                    else
                        echo "<div class='error'>No se ha podido insertar</div>";
                }


                ?>
            <br>
                <a class="form-enlace" href="libros_alta.php">Volver</a>
            </div>
        </div>    
    </body>
</html>

