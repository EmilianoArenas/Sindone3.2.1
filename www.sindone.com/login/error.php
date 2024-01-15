<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/869dc8f5ef.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../public/css/style.css" />
    <title>login</title>
  </head>
  <body>
      <?php
        //iniciar base de datos
        include ('../app/config/config.php');
        include ('../app/config/conexion.php');
        ?>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="#">
          <h1>Crea tu Cuenta</h1>
          <div class="social-container">
            <a href="#" class="social>">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social>">
              <i class="fab fa-google" id="red"></i>
            </a>
            <a href="#" class="social>">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <span>o usa tu email como registro</span>
          <input type="text" placeholder="Nombre" />
          <input type="email" placeholder="Correo" />
          <input type="password" placeholder="Contraseña" />
          <button id="lila">Registrar</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
          <form action="controller_login.php" method="post">
          <h1>Iniciar Sesión</h1>
          <div class="social-container">
            <a href="#" class="social">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social>">
              <i class="fab fa-google" id="red"></i>
            </a>
            <a href="#" class="social">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <span>o usa tu email</span>
          <input type="email" name="correo" placeholder="Correo" />
          <input type="password" name="password" placeholder="Contraseña" />
          <div class="alert-danger">
              Correo o contraseña incorrectos
          </div>
          <a href="#">Olvidaste tu contraseña?</a>
          <button type="submit">Iniciar sesión</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>¡Bienvenido!</h1>
            <p>
              Si ya tienes una cuenta, inicia sesión
            </p>
            <button class="ghost" id="signIn">Iniciar sesión</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hola!!!</h1>
            <p>Si no tienes una cuenta crea una</p>
            <button class="ghost" id="signUp">Registrar</button>
          </div>
        </div>
      </div>
    </div>

    <script src="../public/js/app.js"></script>
  </body>
</html>