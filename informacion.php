<?php
session_start();
error_reporting(0)
?>
<!DOCTYPE html>
<html>
    <head>
        <title>frigelu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width"/>
        <script src="https://kit.fontawesome.com/ec26806206.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png"  href="./Imagenes/Cabecera/icono1.jpg">
        <link href ="CSS/Proyecto.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="CSS/Informacion/presentacion.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="CSS/Informacion/mapa.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="CSS/Informacion/informacion.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="CSS/footer.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="CSS/global.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/normalize.css" rel="stylesheet" type="text/css" media ="screen"/>
    </head>
    <body>
        <header class="header">
            <nav class="nav">
                <a href="index.php" class=" logo nav-link"><img src="./Imagenes/Cabecera/FRIGELU_Transparente_Grande.png"></a>
                <button class="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="nav-menu nav-menu-visible">
                    <li class="nav-menu-item">
                        <a href="./index.php" class="nav-menu-link nav-link ">Inicio</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="" class="nav-menu-link nav-link">Productos</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./galeria.html" class="nav-menu-link nav-link">Galeria</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./informacion.php" class="nav-menu-link nav-link nav-menu-link_active">Información</a>
                    </li>
                    <li class="nav-menu-item">
                    <?php if(!isset($_SESSION['username'])){echo('<a class="login"href = "./registro.php"><i class="fa-regular fa-user"></i></a>');}?>
                    </li>
                    <li class="nav-menu-item  sesion">
                        <a href="" class="nav-menu-link nav-link">
                        <?php
                        if(isset($_SESSION['username']))
                        {echo($_SESSION['username']);}?>
                        </a>
                        <nav id="">

                        </nav>
                    </li>
                </ul>
            </nav> 
        </header>
        <section>
            <div class="padding-horizontal padding-vertical">
                <article class="presentacion">
                    <div class="presentacion-info">
                        <h1 class="presentacion-titulo">¿Quienes somos ? </br></h1>
                        <p class="presentacion-detalles">Somos una tienda fisica con más de 30 años de experiencia 
                            en Maquinaria de Hosteleria y desde hace 10 años también 
                            con servicio Online</p>
                    </div>
                    <div class="presentacion-img-div">
                        <img class="presentacion-img" src="Imagenes/Main/fachada1.png" alt="fachada">
                    </div>
                </article>
            </div>
            <article id="scroll_1" class="encabezado-informacion">
                <div class="ola"></div>
                <div class="informacion">
                    <h1 class="informacion-titulo">Información</h1>
                    <div class="informacion-grid">
                        <div></div>
                        <div class="linea"></div>
                        <div class="informaciones informaciones-izq">
                            <div class="informaciones-titulo">Horario</div>
                            <div class="informaciones-subtitulo">De Lunes a Viernes</div>
                            <div class="informaciones-subtitulo"> 9:00 a 13:30</br> 16:00 a 20:00</div>
                        </div>
                        <div class="informaciones informaciones-dch">
                            <div class="informaciones-titulo">Dirección</div>
                            <div class="informaciones-subtitulo">FRIGELU ESPAÑA/EUROPA</div>
                            <div class="informaciones-subtitulo">27003 Lugo</div>
                            <div class="informaciones-subtitulo">Polg. Ind do Ceao</div>
                            <div class="informaciones-subtitulo">Avd Benigno Rivera 1</div>
                        </div>
                        <div class="linea"></div>
                        <div></div>
                        <div></div>
                        <div class="linea"></div> 
                        <div class="informaciones informaciones-izq">
                            <div class="informaciones-titulo">Horario</div>
                            <div class="informaciones-subtitulo">De Lunes a Viernes</div>
                            <div class="informaciones-subtitulo">9:00 a 13:30</br>16:00 a 20:00</div>
                        </div>
                        
                        <div class="informaciones informaciones-dch">
                            <div class="informaciones-titulo">Contacto</div>
                            <div class="informaciones-subtitulo">Tlfn: 606028120</div>
                            <div class="informaciones-subtitulo">frigelu@gmail.com</div>
                        </div>
                        <div class="linea"></div>
                    </div>
                </div>
                <div class="ola2"></div>
            </article>
            <article id="scroll_2" class="mapa-ubicacion">
                <div class="ubicacion">
                    <div class="mapa-titulo">¿ Donde encontrarnos ?</div>
                    <div class="mapa"><iframe class="mapa-iframe"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d427.2878330827251!2d-7.575382428797782!3d43.03622158914823!2m3!1f0
                        !2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e6bfeb3051cdf31!2sFRIGELU!5e0!3m2!1ses!2ses!4v1613323050184!5m2!1ses!2ses"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="comentario">
                    En Frigelu, encontrará todo tipo de maquinaria a los mejores precios
                    del mercado, con entrega en su domicilio y con todas las garantías de compra.
                    </br></br>Los precios del catálogo de la web no incluyen el IVA.
                </div>
            </article>
        </section>
        <footer id="scroll_3">
            <div class="redes-sociales">
                <div class="redes-sociales-titulo">
                    <h1>REDES SOCIALES</h1>
                </div>
                <div class="redes-sociales-iconos">
                    <a href="https://www.instagram.com/frigelu/"><img alt="instagram" src="./Imagenes/Pie de pagina/intagram.png" height="50px"width="50px"/></a>
                    <a href="https://api.whatsapp.com/message/KZREJQQV6TTRK1"><img  alt="Whatsapp" src="./Imagenes/Pie de pagina/whatsapp.png"height="50px"width="50px"/></a>
                    <a href="https://twitter.com/Frigelu"><img src="./Imagenes/Pie de pagina/twitter.png"height="50px"width="50" alt="Twitter"/></a>
                    <a href="https://www.facebook.com/frigelu"><img src="./Imagenes/Pie de pagina/redsocial.png"height="50px"width="50px" alt="Facebook"/></a>
                </div>
            </div>
            <div class="footer-informacion">
                <div class="footer-informacion-contenido">FRIGELU ESPAÑA/EUROPA</div>
                <div class="footer-informacion-contenido">Avd Benigno Rivera 1</div>
                <div class="footer-informacion-contenido">Polg. Ind do Ceao</div>
                <div class="footer-informacion-contenido">27003 Lugo</div>
                <div class="footer-informacion-contenido"></div>
                <div class="footer-informacion-contenido">frigelu@frigelu.com</div>
            </div>
		</footer>      
    </body>
    <script src="JS/Proyecto.js"></script>
</html>