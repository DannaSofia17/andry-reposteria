<?php
session_start(); //inicia activación de sesión mientras los datos ingresados sean ciertos
session_destroy(); //cierra sesión sin eliminar datos guardados por el usuario en la sesión
header("location: index.php") //envia a la página de login
?>