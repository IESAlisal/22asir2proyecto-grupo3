<?php
include_once 'funcionesBaseDatos.php';

if (isset($_POST['registrar']))
{
    $nombre  =  $_POST['nombre'];
    $password     = $_POST['password'];
    $password2 = $_POST['password2'];
    
    if($password==$password2)
    {
      try
      {
        if(registrarUsuarioMySQLi($nombre, $password))
        {
            $mensaje = "Se ha registrado el usuario $nombre";
            session_start();
            $_SESSION['usuario'] = $nombre;
            header("Location: index.php");
        }
          
      }catch(Exception $e)
      {
        $error = "El usuario $nombre ya está registrado<br/>{$e->getMessage()}";
      }
        
    }
    else
        $error = "Las contraseñas no coinciden";
}
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Grupo3</title>
    <!-- Fuente -->
	  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
    <!-- CSS animado -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/estiloRegistro.css">
  </head>
  <body>
    <form class="form-box" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
      <h1 class="form-title">REGISTRO</h1>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre" required autofocus>
      <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
      <input type="password" name="password2" class="form-control" placeholder="Repita la contraseña" required>
      <button type="submit" name="registrar">
        Registrarse
      </button>

      <?php if(isset($mensaje)) echo "<div class='aviso-linea'>$mensaje</div>"; ?>
      <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>

      <p>&copy; Raul, Javier y Agustin</p>
      <a class="form-register" href="login.php">Volver</a>
    </form>
  </body>
</html>
