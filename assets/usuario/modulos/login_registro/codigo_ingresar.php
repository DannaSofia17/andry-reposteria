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
    if (isset($_POST['btn_ingresar'])) { //el usuario debio apretar el boton que se verifica al rellenar los campos

        include "./conexion.php"; //llama o trae el archivo con el codigo de la conexion con la BD en PHP my admin

        if(isset($_GET['cerrar_sesion'])){
            //inicia activación de sesión del usuario
            session_unset(); 
    
            // destroy the session 
            session_destroy(); 
        } 
        if(isset($_SESSION['rol'])){
            switch($_SESSION['rol']){
                case 1:
                    header('location: admin.php');
                break;
    
                case 2:
                header('location: ../index.php');
                break;
    
                default:
            }
        }

        $email = $_POST['email']; //se define variable del formulario principal
        $password = $_POST['pass'];

        $encrip = md5($password); //se encripta la contraseña
        //se consulta que la información ingresada en los campos sea igual a la ingresada en el registro   
        $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$email' AND clave = '$encrip'") or die($conexion . "Error en el ingreso");

        $resultado = mysqli_num_rows($consulta);

        if ($resultado >= 1) { //si los datos son correctos sube a más de 1 la consulta 
            #Ciclo para buscar datos while
            while ($fila = mysqli_fetch_array($consulta)) { //ciclo condincional si se cumple el número mayor a 1 en la consulta 
                $_SESSION['email'] = $fila['correo_electronico']; //se define el nombre del campo en la tabla de la BD en PHP my admin y el nombre en el formulario. 
                $_SESSION['encrip'] = $fila['clave'];
            }
            echo "<script>Swal.fire('Bienvenido!', 'Haz iniciado sesión correctamente!', 'success');</script>";

            // echo "<script>window.location='../../../../index.php?mod=inicio';</script>"; //redirige al usuario a la interfaz de homepage o inicia sección correctamente

        } else {
            echo "<script>Swal.fire('Ups!', 'Usuario y/o contraseñas incorrectas!', 'error');</script>"; //mensaje de alerta sobre datos no veridicos

            echo "<script>window.location='../../../../index.php?mod=login_registro';</script>"; //redirige página de login
        }
    }
  
    
   
    ?>
</body>

</html>