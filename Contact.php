<!DOCTYPE html>

<?php session_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Contact - BookHouse</title>
        <link rel="icon" type="image/png" href="imgs/logoPrincipal.jpg">

        <!-- CSS: -->
        <link rel="stylesheet" type="text/css" href="css/ColorContact.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        
        <!-- JS -->
        <script src="js/contact.js"></script>
    </head>


    <body class="homepage is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header">
                <div class="container">
                    <!-- Nav -->
                    <nav id="nav">
                        <ul id="ulList">
                            <li><a class="icon solid fa-home" href="BienvenidaPage.php"><span>Home</span></a></li>
                            <li><a class="icon solid fa-home" href="Libros.php"><span>Books</span></a></li>
                            <li><a href="BienvenidaPage.php"><img id="logoPrincipal" src="imgs/logoPrincipal.jpg" alt="Logo Principal"></a></li>
                            <li><a class="icon solid fa-home" href="BuscarLibroConcreto.php"><span>Find & Booking</span></a></li>
                            <li><a class="icon solid fa-home" href="Contact.php"><span>Contact</span></a></li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
        
          <p id="socialmedia"
           style='margin-left: 0%; font-size: x-large; color: black;'> <?php echo " " . $_SESSION["loggeado"]; ?>
            <a href="https://www.facebook.com/" target="_blank"><img id="imgsContact" src="imgs/ImgFacebook.png" alt="Facebook" style="margin-left: 36%;"></a>
            <a href="https://twitter.com/?lang=es" target="_blank"><img id="imgsContact" src="imgs/ImgTwitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/?hl=es" target="_blank"><img id="imgsContact" src="imgs/ImgInstagram.png" alt="Instagram"></a> 
            <a href="https://www.gmail.com" target="_blank"><img id="imgsContact" src="imgs/ImgGmail.png" alt="Gmail"></a>
        </p>

        
        <!-- Contact form -->
        <div class="container-contact100" style="padding-top: 0px !important; padding-buttom: 0px !important;">
            <div class="contact100-map"></div>

            <div class="wrap-contact100">		
                <form method="POST" action="enviarcorrero.php" class="contact100-form validate-form">
                    <h2 style="font-size: 25px; margin-bottom: 33px">CONTACTA CON NOSOTROS</h2>

                    <div class="wrap-input100 validate-input" data-validate="Ponga su Nombre aqui">
                        <input class="input100" type="text" name="datoNombreContact" placeholder="Nombre" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Escriba email: ankush@gmail.com">
                        <input class="input100" type="text" name="datoEmailContact" placeholder="Email" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Esciba su Mensaje">
                        <textarea class="input100" name="datoMensajeContact" placeholder="Mensaje" required></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <input type="submit" name="enviarContact" id="signup" class="form-submit" value="Enviar"/>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer">
            <p class="contenidofooter"> Created by: Ankush Bihal  |  Copyrights: 2020 </p>
        </div> 
        
    </body>
</html>
