<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/usuario/css/login_registro.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>

  <link rel="shortcut icon" href="./assets/usuario/img/logo.png" type="image/x-icon">
  <title>Andry Reposteria &#127856; &#128149;</title>
</head>

<body>
  <main>
    <div class="box-lr">
      <div class="inner-box-lr">
        <div class="forms-wrap-lr">
          <!-- Formulario Login -->
          <form action="assets/usuario/modulos/login_registro/codigo_ingresar.php" method="post" name="form" autocomplete="off" class="sign-in-form-lr">
            <div class="logo-lr">
              <img src="assets/usuario/img/logo.png" alt="Andry Reposteria" />
              <h4>Andry Reposteria</h4>
            </div>

            <div class="heading-lr">
              <h2>Bienvenid@</h2>
              <h6>¿Aún no está registrad@?</h6>
              <a href="#" class="toggle">Registrarse</a>
            </div>

            <div class="actual-form-lr">
              <div class="input-wrap-lr">
                <input type="email" name="email" minlength="4" class="input-field" autocomplete="off" required />
                <label>Correo electronico</label>
              </div>

              <div class="input-wrap-lr">
                <input type="password" name="pass" minlength="4" class="input-field" autocomplete="off" required />
                <label>Contraseña</label>
              </div>

              <input type="submit" value="Ingresar" class="sign-btn-lr" name="btn_ingresar"/>

              <p class="social-text-lr">Ingrese con redes sociales</p>
              <div class="social-media-lr">
                <a href="#" class="social-icon-lr">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon-lr">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon-lr">
                  <i class="fab fa-twitter"></i>
                </a>
              </div>
            </div>
          </form>

          <!-- Formulario Registro -->
          <form action="assets/usuario/modulos/login_registro/codigo_registrar.php" method="post" name="form" autocomplete="off" class="sign-up-form-lr">
            <div class="logo-lr">
              <img src="assets/usuario/img/logo.png" alt="Andry Reposteria" />
              <h4>Andry Reposteria</h4>
            </div>

            <div class="heading-lr">
              <h2>Empezar</h2>
              <h6>¿Ya tienes cuenta?</h6>
              <a href="#" class="toggle">Ingresar</a>
            </div>

            <div class="actual-form-lr">
              <div class="input-wrap-lr">
                <input type="text" name="nom" minlength="4" class="input-field" autocomplete="off" required />
                <label>Nombre</label>
              </div>

              <div class="input-wrap-lr">
                <input type="email" name="email" class="input-field" autocomplete="off" required />
                <label>Correo Electronico</label>
              </div>

              <div class="input-wrap-lr">
                <input type="password" name="pass" minlength="4" class="input-field" autocomplete="off" required />
                <label>Contraseña</label>
              </div>

              <div class="input-wrap-lr">
                <input type="password" name="Cpass" minlength="4" class="input-field" autocomplete="off" required />
                <label>Confirmar contraseña</label>
              </div>

              <input type="submit" value="Registrarse" class="sign-btn-lr" name="btn_registrar"/>

              <p class="social-text-lr">Registrarse con redes sociales</p>
              <div class="social-media-lr">
                <a href="#" class="social-icon-lr">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon-lr">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon-lr">
                  <i class="fab fa-twitter"></i>
                </a>
              </div>
            </div>
          </form>
        </div>

        <div class="carousel-lr">
          <div class="images-wrapper">
            <img src="assets/usuario/img/login_registro/image1.png" class="image img-1 show" alt="" />
            <img src="assets/usuario/img/login_registro/image2.png" class="image img-2" alt="" />
            <img src="assets/usuario/img/login_registro/image3.png" class="image img-3" alt="" />
          </div>

          <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>La mejor receta es la pasión</h2>
                <h2>El toque de dulzura que necesitas</h2>
                <h2>Endulzamos tu vida</h2>
              </div>
            </div>

            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
              <span data-value="3"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Javascript file -->

  <script src="assets/usuario/js/login_registro.js"></script>
</body>

</html>