<?php
session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>frigelu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width"/>
        <script src="https://kit.fontawesome.com/ec26806206.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png"  href="./Imagenes/Cabecera/icono1.jpg">
        <link href ="./CSS/Proyecto.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/Index/Index.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/footer.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/normalize.css" rel="stylesheet" type="text/css" media ="screen"/>
    </head>
    <body>
        <header class="header">
            <nav class="nav">
                <a href="index.php" class=" logo nav-link"><img width="100px"src="./Imagenes/Cabecera/logo.jpeg"></a>
                <button class="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="nav-menu nav-menu-visible">
                    <li class="nav-menu-item">
                    <?php if($_SESSION['roll']=='administrador'){
                        ?><a class="nav-menu-link nav-link "href = "./insertar.php">INSERTAR</a><?php } ?>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./index.php" class="nav-menu-link nav-link nav-menu-link_active">Inicio</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="" class="nav-menu-link nav-link">Productos</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./galeria.html" class="nav-menu-link nav-link">Galeria</a>
                    </li>
                    <li class="nav-menu-item ">
                        <a href="./informacion.php" class="nav-menu-link nav-link">Información</a>
                    </li>
                    <li class="nav-menu-item">
                    <?php if(!isset($_SESSION['username'])){echo('<a class="login"href = "./registro.php"><i class="fa-regular fa-user"></i></a>');}?>
                    </li>
                    <?php
                        if(isset($_SESSION['username'])){
                    ?>
                    <li class="nav-menu-item  sesion">
                    <?php    
                        echo($_SESSION['username']);?>
                        </a>
                        <ul>
                            <li><a href="./PHP/logout.php">Cerrar sesión</a>

                        </ul>
                    </li>
                    <?php } ?>
                </ul>
                    
            </nav> 
        </header>

        <section class="productos">
        <video src="./Imagenes/video.mp4"
            width="100%"autoplay="true" muted="true" loop="true"></video>
        </video> 

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