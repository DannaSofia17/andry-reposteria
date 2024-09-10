<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andry Reposteria &#127856; &#128149;</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
</head>

<body>
    <?php
    if (isset($_POST['btn_registrar'])) { //el usuario debio apretar el boton que se verifica al rellenar los campos 

        require './conexion.php'; //llama o trae el archivo con el codigo de la conexion con la BD en PHP my admin

        $pass = $_POST['pass']; // se definen varibles con el name de campos del formulario
        $Cpass = $_POST['Cpass'];

        if ($pass == $Cpass) { //se confirma que el usuario ingrese la misma contraseña en ambos campos
            $nombre = $_POST['nom'];
            $email = $_POST['email'];
            $clave = md5($pass); //se encripta la contraseña del usuario
            $id_rol = 2;

            //se llama el nombre de la tabla de php con sus campos exactos y se insertan los datos de las variables que tienen los datos ingresados en el formulario    
            $registrar = mysqli_query($conexion, "INSERT INTO usuarios(nombre, correo_electronico, clave, id_rol) VALUES ('$nombre', '$email', '$clave', $id_rol)") or die($conexion . "Error al registrar el usuario");

            //mensaje tipo alerta-confirmacion registro
            echo "<script>Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              });</script>";
            //redireccion pagina para iniciar sesion
            echo "<script>window.location='../../../../index.php?mod=login_registro';</script>";

        } else {
            //mensaje error cuando el usuario no ingreso las mismas contraseñas
            echo "<script>Swal.fire('Ups!', 'Las contraseñas no coinciden!', 'error');</script>";
            //reenvia a la página de login
            echo "<script>window.location='../../../../index.php?mod=login_registro';</script>";
        }
    }
    ?>
</body>

</html>