<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fuente awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.scss">
    <!-- enlace de archivo css personalizado  -->
    <link rel="stylesheet" href="./css/dashboard.css">

    <link rel="shortcut icon" href="./assets/usuario/img/logo.png" type="image/x-icon">
    <title>Andry Reposteria &#127856; &#128149;</title>
</head>

<body>

    <!-- inicio header  -->

    <header class="header">

        <div class="logo">
            <img src="./img/logo.png" alt="logo">
            <h3>Andry Reposteria</h3>
        </div>

        <nav class="navbar">
            <a href="./../../index.php?mod=inicio">Inicio</a>
            <a href="productos.php">Nuestros productos</a>
            <a href="./../../index.php?mod=nosotros">¿Quiénes somos?</a>
            <a href="./../../index.php?mod=contacto">Contáctanos</a>

        </nav>
        <div class="icons">
            <a href="#">
                <div id="menu-btn" class="fas fa-bars"></div>
            </a>
            <a href="../../index.php?mod=carrito">
                <div id="cart-btn" class="fas fa-shopping-cart"></div>
            </a>
            <a href="../../index.php?mod=deseos">
                <div id="heart-btn" class="fas fa-heart"></div>
            </a>
            <a href="../../index.php?mod=login_registro">
                <div id="login-btn" class="fas fa-user"></div>
            </a>
        </div>


    </header>
    <!-- fin del header -->
    <center>
        <header class="header">
            <nav class="navbar">
                <a href="productos.php?modp=destacados">Destacados</a>
                <a href="productos.php?modp=tortas">Tortas</a>
                <a href="productos.php?modp=cupcakes">Cupcakes</a>
                <a href="productos.php?modp=postres">Postres</a>
                <a href="productos.php?modp=chocolates">Chocolates</a>
                <a href="productos.php?modp=galletas">Galletas</a>
            </nav>
        </header>
    </center>
    <!-- modulacion -->
    <div class="modulos_productos">
        <?php
        if (@$_GET['modp'] == "") {
            require_once("./modulos_productos/destacados.php");
        } else 
                if (@$_GET['modp'] == "destacados") {
            require_once("./modulos_productos/destacados.php");
        } else 
                if (@$_GET['modp'] == "tortas") {
            require_once("./modulos_productos/tortas.php");
        } else
                if (@$_GET['modp'] == "cupcakes") {
            require_once("./modulos_productos/cupcakes.php");
        } else
                if (@$_GET['modp'] == "postres") {
            require_once("./modulos_productos/postres.php");
        } else
                if (@$_GET['modp'] == "chocolates") {
            require_once("./modulos_productos/chocolates.php");
        } else
                if (@$_GET['modp'] == "galletas") {
            require_once("./modulos_productos/galletas.php");
        }
        ?>
    </div>

    <!-- Inicia seccion de pie de pagina  -->

    <section class="footer">

        <div class="newsletter">
            <h3>Noticias</h3>
            <form action="">
                <input type="email" name="" placeholder="Escribe tu correo aquí para más informacion de Andry Repostería" id="">
                <input type="submit" value="subscribirse">
            </form>
        </div>

        <div class="box-container">

            <div class="box">
                <h3>Productos</h3>
                <a href="productos.php?modp=tortas"><i class="fas fa-arrow-right"></i> Tortas</a>
                <a href="productos.php?modp=cupcakes"><i class="fas fa-arrow-right"></i> Cupcakes</a>
                <a href="productos.php?modp=chocolates"><i class="fas fa-arrow-right"></i> Chocolates</a>
                <a href="productos.php?modp=postres"><i class="fas fa-arrow-right"></i> Postres</a>
                <a href="productos.php?modp=galletas"><i class="fas fa-arrow-right"></i> Galletas</a>
            </div>

            <div class="box">
                <h3>Enlaces Rápidos</h3>
                <a href="../../index.php?mod=inicio"> <i class="fas fa-arrow-right"></i> Inicio</a>
                <a href="../../index.php?mod=nosotros"> <i class="fas fa-arrow-right"></i> Sobre nosotros</a>
                <a href="productos.php?modp=destacados"> <i class="fas fa-arrow-right"></i> Destacados</a>
                <a href="../../index.php?mod=contacto"> <i class="fas fa-arrow-right"></i> Contáctanos</a>
                <a href="https://encuesta.com/survey/kPd1wIDwXO/satisfaccion-del-cliente-general" target="_blank"> <i class="fas fa-arrow-right"></i> PQRS</a>
            </div>

            <div class="box">
                <h3>Otros links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Mi pedido</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Mi cuenta</a>
                <a href="../../index.php?mod=deseos"> <i class="fas fa-arrow-right"></i> Mis favoritos</a>
            </div>

            <div class="box">
                <h3>Horarios</h3>
                <p>Lunes, Martes, Miercoles, Jueves y Viernes : 8:00am a 6:00pm</p>
                <p>Sábado : 10:00am a 9:00pm</p>
                <p>Domingo : cerrado</p>
            </div>

        </div>

        <div class="bottom">

            <div class="share">
                <a href="https://www.facebook.com/andryreposteria/" target="_blank" class="fab fa-facebook-f"></a>
                <a href="#" target="_blank" class="fab fa-twitter"></a>
                <a href="https://instagram.com/andryreposteria?igshid=YmMyMTA2M2Y=" target="_blank" class="fab fa-instagram"></a>
                <a href="https://api.whatsapp.com/send?phone=573013823407&text=Holaa,%20me%20interesa%20saber%20mas%20sobre%20Andry%20Reposteria%20y%20sus%20productos" target="_blank" class="fab fa-whatsapp"></a>
            </div>

            <div class="credit"> Creado por <span>DMS Technologies</span> | ¡Reservados Todos Los Derechos! </div>

        </div>

    </section>

    <!-- finaliza seccion de pie de pagina -->


    <!-- Chatbot -->
    <script>
        window.addEventListener('mouseover', initLandbot, {
            once: true
        });
        window.addEventListener('touchstart', initLandbot, {
            once: true
        });
        var myLandbot;

        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.addEventListener('load', function() {
                    var myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1400929-5DSW4AAYHRGB6N1E/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        }
    </script>
    <script src="assets/js/dashboard.js"></script>
</body>

</html>