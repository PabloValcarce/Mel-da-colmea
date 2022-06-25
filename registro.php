<html>
    <head>
        <title>frigelu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width"/>
        <script src="https://kit.fontawesome.com/ec26806206.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png"  href="../Imagenes/Cabecera/icono1.jpg">
        <link href ="./CSS/Proyecto.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/footer.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/login/login.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="./CSS/normalize.css" rel="stylesheet" type="text/css" media ="screen"/>
    </head>
    <body>
        <header class="header">
            <nav class="nav">
                <a href="./index.php" class=" logo nav-link"><img src="./Imagenes/Cabecera/FRIGELU_Transparente_Grande.png"></a>
                <button class="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="nav-menu nav-menu-visible">
                    <li class="nav-menu-item">
                        <a href="./index.php" class="nav-menu-link nav-link nav-menu-link_active">Inicio</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="" class="nav-menu-link nav-link">Productos</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./galeria.html" class="nav-menu-link nav-link">Galeria</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./informacion.php" class="nav-menu-link nav-link">Información</a>
                    </li>
                </ul>   
            </nav> 
        </header>
        <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para poder comprar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas comprar</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>
                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="./PHP/login_usuario.php"method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input required name="email_ini"type="email" placeholder="Correo Electronico">
                        <input required name="password_ini"type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="./PHP/registro_usuario.php" method="post"class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input required name="username"type="text" placeholder="Nombre de Usuario">
                        <input required name="email"type="email" placeholder="Correo Electrónico">
                        <input required name="password"type="password" placeholder="Contraseña">
                        <input required name="cpassword"type="password" placeholder="Repite Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>       
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
    <script src="./JS/Proyecto.js"></script>
    <script src="./JS/login.js"></script>
</html>