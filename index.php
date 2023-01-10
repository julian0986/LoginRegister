<?php 
  session_start();
  if(isset($_SESION['usuario'])) {
      header('Location: bienvenido.php');

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login y Registro</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <main>
      <div class="contenedor">
        <div class="caja_atras">
          <div class="caja_atras-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia Sesión para entrar en la Página</p>
            <button id="btn_iniciar_sesion">Iniciar Sesión</button>
          </div>
          <div class="caja_atras-register">
            <h3>¿Aún no tienes una cuenta.?</h3>
            <p>Registrate para Iniciar sesión</p>
            <button id="btn_Registrarse">Regístrarse</button>
          </div>
        </div>
        <!-- Formulario de Login y Registro -->
        <div class="contenedor_login-register">
          <!-- Login -->
          <form action="php/login_usuario_be.php" method="POST" class="formulario_login">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo Electrónico" name="correo" />
            <input type="password" placeholder="Contraseña" name="contrasena"/>
            <button>Entrar</button>
          </form>
          <!-- Registro -->
          <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre Completo" name="nombre_completo" />
            <input type="text" placeholder="Correo Electrónico" name="correo"/>
            <input type="text" placeholder="Usuario" name="usuario"/>
            <input type="password" placeholder="Contraseña" name="contrasena"/>
            <button>Regístrarse</button>
          </form>
        </div>
      </div>
    </main>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
