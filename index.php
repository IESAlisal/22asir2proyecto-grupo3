<?php
include_once 'funcionesBaseDatos.php';
session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null){
    header("Location: index.php");
}

?>
<html>
    <head>
        <title>Aplicacion de Gestion de libros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estiloIndex.css">
    </head>
    <body>
        <div id="menu">
            <ul>
                <h2>Aplicacion de libros</h2>
            </ul>
            <ul>
                <li><a href="libros_MySQLi.php">Alta Libros</a></li>
            </ul>
            <ul> 
                <li><a href="libros_actualizar.php">Actualizar Libros</a></li>
            </ul>
            <ul>
                <li><a href="libros_borrar_MySQLi.php">Baja Libros</a></li>
            </ul> 
            <ul>
                <li><a href="CV/Curriculum.pdf">Descargar Curriculum</a></li>
            </ul> 
            <ul>
                <li><a href="CV/FormularioCV.html">Subir Curriculum</a></li>
            </ul> 
            <ul>
                <form action='logoff.php' method='post'>
                        <input type='submit' name='desconectar' class="btn btn-warning" value='Desconectar <?php echo
                    $_SESSION['usuario'];
                    ?>'/>
                </form>
            </ul>
        </div>
    </body>
</html>