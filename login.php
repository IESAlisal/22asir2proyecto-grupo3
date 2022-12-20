<?php
include_once 'funcionesBaseDatos.php';

if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if (empty($usuario) || empty($password))
        $error = "Debes introducir un nombre de usuario y una contraseña";
    else 
    {
        include_once 'funcionesBaseDatos.php';
        if(usuarioCorrecto($usuario, $password))
        {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location: index.php");
        }
        else
        {
            $error = "¡Usuario o contraseña no válidos!";
        }
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estiloLogin.css">
  </head>

  <body class="text-center">
    
  <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
    <h2>Login</h2>
    <form class="form-signin" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
      <label for="usuario" class="sr-only">Usuario</label>
      <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
      <label for="password" class="sr-only">Contraseña</label>
      <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
      </br>
      <button>Iniciar Sesion</button> 
      <p>¿Aún no tienes cuenta?</p>
      <a class="btn btn-primary" href="registro.php">Registrate aqui</a>
    </form>
  </body>
</html>
