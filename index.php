<?php
include_once 'funcionesBaseDatos.php';

session_start();
    if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null){
        header("Location: index.php");
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion de libros</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estiloIndex.css">
    </head>
    <body>
        <div class="form-box">
            <h1 class="form-title">Aplicacion de libros</h1>
            <ul>
                <a class="form-enlace" href="libros_alta.php">Alta Libros</a>
            </ul>
            <ul> 
                <a class="form-enlace" href="libros_actualizar.php">Actualizar Libros</a>
            </ul>
            <ul>
                <a class="form-enlace" href="libros_borrar.php">Baja Libros</a>
            </ul> 
            <ul>
                <a class="form-enlace" href="CV/Curriculum.pdf">Descargar Curriculum</a>
            </ul> 
            <ul>
                <a class="form-enlace" href="FormularioCV.html">Subir Curriculum</a>
            </ul> 
                <form action='logoff.php' method='post'>
                        <input type='submit' name='desconectar' class="form-logoff" value='Desconectar <?php echo
                    $_SESSION['usuario'];
                    ?>'/>
                </form>
        </div>
    </body>
</html>