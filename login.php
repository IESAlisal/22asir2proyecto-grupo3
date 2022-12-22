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

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Grupo3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/estiloLogin.css">
  </head>
  <body>
    
  <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
  
    <form action="form-signin" class="form-box" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>">
      <h1 class="h3 mb-3 font-weight-normal form-title">Login</h1>
      <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
      <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
        Iniciar Sesion
      </button>
                  $error = "¡Usuario o contraseña no válidos!";
        }
    }
}
?>
      <p>¿Aún no tienes cuenta?</p>
      <a class="btn btn-primary form-register" href="registro.php">Registrate aqui</a> 
    </form>

  </body>
</html>
