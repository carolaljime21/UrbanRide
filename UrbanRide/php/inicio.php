<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf'8">
	<meta name="viewport" content="wifth=device'width,intial'scale=1">
	<link rel="stylesheet" type="text/css" href="../css/inicioEstilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <main class="principal">
        <header class="cabeceraPrincipal">
            <img class="logoWh" src="../images/logoWh.png">
            <nav class="menuPrincipal">
                <a href="inicio.php">Inicio</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="eBikes.html">E-Bikes</a>
                <a href="">Sugerencias</a>
                <a href="#mapa">Mapa</a>
                <a href="Ayuda.html">Ayuda</a>
                  <article class="menuCuenta">
                    <a href="#" id="cuentaDropdown">
                        <i class="fa-solid fa-user"></i>
                        <?php 
                            echo isset($_SESSION["sesion_name"]) ? $_SESSION["sesion_name"] : "Cuenta";
                        ?>
                    </a>
                    <?php if (isset($_SESSION["sesion_name"])) : ?>
                        <article class="cuentaDropdown">
                            <a href="">Configuracion</a>
                            <a href="">Reservas</a>
                            <a href="">Historial</a>
                            <a href="">Pagos</a>
                            <a href="exit.php">Cerrar sesion</a>
                        </article>
                    <?php endif; ?>
                </article>
            </nav>
        </header>

        <section class="Frase">
            <h1> PEDALEA CON PASION,</h1>
            <h2>VIVE CON ENERGIA</h2>
            <p> - UrbanRide contigo - </p>
        </section>
        <section class="titulosPage">
            <h3>Movilidad Urbana</h3>
            <h4>Nuestros articulos</h4>
        </section>

        <section class="servicios">
            <article class="itemCard">
                <img class="bike" src="../images/bikeCard.png">
                <h5>E-BIKES</h5>
            </article>
    
            <article class="itemCard">
                <img class="scooter" src="../images/scooterCard.png">
                <h5>E-SCOOTERS</h5>
            </article>
        </section>

        <section class="logos">
            <article>
                <img src="../images/EmpresaNodo.png" alt="">
            </article>
    
            <article>
                <img src="../images/empresaUrban.png" alt="">
            </article>
        </section>

        <section class="noticias">
            <article class="noticia1">
                <img src="../images/carro.jpg">
                <p style="text-decoration: none;">Queremos disminuir la cantidad excesiva de trafico en nuestra ciudad, usando vias de 
                    ciclismo, dando uso a nuestras bicicletas y  scooters e indicando que rutas son mas 
                    eficientes al momento de trasladarse</p>
            </article>
            <article class="noticia2">
                <p>Ayudar a los ciudadanos a transportarse de una manera mas rapida y sencilla dentro de la 
                    ciudad, gracias al alquiles de bicicletas y scooters por medio de nuestra página web y
                     aplicativo móvil</p>
                <img src="../images/celular.jpg">
                
            </article>
            <article class="noticia3">
                <img src="../images/carro.jpg">
                <p>Queremos disminuir la cantidad excesiva de tráfico en nuestra ciudad, usando vías de 
                    ciclismo, dando uso a nuestras bicicletas y scooters e indicando que rutas son mas 
                    eficientes al momento de trasladarse.</p>
            </article>
        </section>

        <section class="lugar">
            <h1>LUGARES</h1>
            <h2>Principales destinos</h2>
                <section class="imglugar">
                    <article class="lugar1">
                        <img src="../images/lugar1.jpg" alt="">
                        <p>Contamos con nuestros productos en el parque Jipiro, lugar en donde podrás recorrer para poder entretener con tu familia, amigos o hasta uno mismo, te ofrecemos nuestros servicios para que puedas disfrutar mejor de este ambiente.</p>
                    </article>
                    <article class="lugar2">
                        <img src="../images/lugar2.jpg" alt="">
                        <p>Contamos con nuestros productos en el parque Central La Catedral, lugar en el cual podrás agarrar distintos caminos para transportante a distintos lugares, para mas facilidad es que te ofrecemos estos productos, para facilitar tu movilidad.</p>
                    </article>
            </section>
        </section>

        <section class="mapa" id="mapa">
            <h1>MAPA DE BUSQUEDA</h1>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="560" id="gmap_canvas" src="https://maps.google.com/maps?q=loja+24+de+mayo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </section>
        
        <footer class="piePag">
            <img src="../images/logoRd.png">
            <section>
                <h4>Servicios</h4>
                <a href="">Inicio</a>
                <a href="">Nosotros</a>
                <a href="">E-Bikes</a>
                <a href="">Sugerencias</a>
                <a href="">Mapa</a>
                <a href="">Ayuda</a>
            </section>
            <section>
                <h4>¿Necesitas ayuda?</h4>
                <a class="Cuenta">
                    <i class="fa-solid fa-mobile-screen-button" style="color: #ffffff;"></i> Celular: 0991850524
                </a>
                <a class="Cuenta">
                    <i class="fa-solid fa-phone" style="color: #ffffff;"></i> Telefono: (07)219-360
                </a>
                <a class="Cuenta">
                    <i class="fa-solid fa-envelope" style="color: #ffffff;"></i> E-mail: urbanride@gmail.com
                </a>
            </section>
            <section>
                <h4>Redes sociales</h4>
                <a>
                    <i class="fa-brands fa-facebook" style="color: #ffffff;"></i></i> UrbanRide
                </a>
                <a>
                    <i class="fa-brands fa-instagram" style="color: #ffffff;"></i> @UrbanRide
                </a>
                <a>
                    <i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i> UrbanRide
                </a>
            </section>
        </footer>
    </main> 
</body>
<script>
    $(document).ready(function() {
        $('a[href^="#mapa"]').on('click', function(event) {
            var target = $($(this).attr('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    });
    </script>
</html>>
