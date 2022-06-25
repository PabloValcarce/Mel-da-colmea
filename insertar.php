<?php
session_start();
error_reporting(0);

?>
<html>
<head>
        <title>frigelu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width"/>
        <script src="https://kit.fontawesome.com/ec26806206.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png"  href="./Imagenes/Cabecera/icono1.jpg">
        <link href ="./CSS/Proyecto.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/footer.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/insertar/insertar.css" rel="stylesheet" type="text/css" media ="screen"/>
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
                    <?php if(isset($_SESSION['roll'])=='administrador'){echo('<a class="nav-menu-link nav-link nav-menu-link_active "href = "./insertar.php">INSERTAR</a>');}?>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./index.php" class="nav-menu-link nav-link ">Inicio</a>
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
                    <li class="nav-menu-item  sesion">
                        <a href="" class="nav-menu-link nav-link">
                        <?php
                        if(isset($_SESSION['username']))
                        {echo($_SESSION['username']);}?>
                        </a>
                        <ul>
                            <li>Hola</li>
                        </ul>
                    </li>
                </ul>    
            </nav> 
        </header>
        <section>
            <h1>Producto</h1>
            <form method="post" action="insertar_productos.php">
                <input required name="titulo"type="text" placeholder="Título"></br></br>
                <input required name="descripcion"type="text" placeholder="Descripción"></br></br>
                <input required name="precio"type="text" placeholder="Precio"></br></br>
                <input required name="imagen"type="file" placeholder="Imagen"></br></br>
                <input type="submit"value="Enviar">
            </form>
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
</html>