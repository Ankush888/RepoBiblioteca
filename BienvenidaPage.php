<!DOCTYPE html>

<?php session_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Home - BookHouse</title>
        <link rel="icon" type="image/png" href="imgs/logoPrincipal.jpg">

        <!-- CSS: -->
        <link rel="stylesheet" type="text/css" href="css/ColorBienvenidaPage.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">

            .containerFotos {
                width: 100%;
            }

            .imagenes {
                width: 100%;
            }

            .overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: unset;
                overflow: hidden;
                width: 100%;
                height: 0;
                transition: .5s ease;
            }

            .containerFotos:hover .overlay {
                height: 100%;
            }

            .textosLibro {
                white-space: nowrap; 
                color: white;
                font-size: 20px;
                position: absolute;
                overflow: hidden;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
            }

        </style>
    </head>


    <body style="background: #f8f8f8 !important;">
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header">
                <div class="container" style="width:900px;">
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

        <form action="Logout.php" method="post">
            <fieldset class="bordeExterior">
                <div class="form-group form-button">
                    <input type="submit" name="botonLogout" id="signin" class="form-submit" value="Cerrar sesión" style="margin-top: 8px; margin-left: 64.5%;"/>
                </div>
            </fieldset>
        </form>


        <?php
        // Aqui hacemos la comprobacion de si el Boton Loing se pulsa que ha lo siguente:
        if (isset($_POST["botonEntrar"])) {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "biblioteca";

            // Aqui hacemos la comprobacion de si se pul Boton Loing se pulsa que ha lo siguente: 
            if (isset($_POST["datoUsuarioNombre"]) && isset($_POST["pass"])) {

                $infoNombreUsuario = $_POST["datoUsuarioNombre"];
                $infoPassword = $_POST["pass"];

                // Crear la conexi�n
                $conn = mysqli_connect($servername, $username, $password, $database);
                if (!$conn) {
                    header("refresh:2;url=Main.php");
                    die("Fallo al conectarse a la base de datos: " . mysqli_connect_errno());
                }
                /* Seleccionamos todos los datos de la tabla: */
                $ejecutarQuery = mysqli_query($conn, "SELECT * FROM usuario WHERE nombreUsuario = '$infoNombreUsuario'");
                $row = mysqli_fetch_array($ejecutarQuery, MYSQLI_ASSOC);
                $hash = $row['pass'];
                
                if (password_verify($infoPassword, $hash)) {
                    $_SESSION["loggeado"] = $infoNombreUsuario;
                } else {
                    echo "<script type='text/javascript'> alert('Usuario o contraseña incorrecta.'); window.location.href='Main.php';</script>";
                }
            }
        }
        ?>

        <p id="socialmedia" style='margin-left: 0%;font-size: x-large;color: black;'> <?php echo " " . $_SESSION["loggeado"]; ?>
            <a href="https://www.facebook.com/" target="_blank"><img id="imgsContact" src="imgs/ImgFacebook.png" alt="Facebook" style="margin-left: 36%;"></a>
            <a href="https://twitter.com/?lang=es" target="_blank"><img id="imgsContact" src="imgs/ImgTwitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/?hl=es" target="_blank"><img id="imgsContact" src="imgs/ImgInstagram.png" alt="Instagram"></a>
            <a href="https://www.gmail.com" target="_blank"><img id="imgsContact" src="imgs/ImgGmail.png" alt="Gmail"></a>
        </p>

        <!--=================================================================-->
        <!--CONTENEDOR PORTADA: -->
        <div class="container" style="width:800px; margin-top: 1%;">
            <div class="row" style="padding-top: 2%;">
                <div class="col-lg-12 center">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner center">
                            <div class="item active">
                                <img src="imgs/portada4.png" alt="Concecionario1" style="width:100%;">                                
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="lineaSeparacion"></div>
        </div>

        <br>

        <div class="container" style="width:800px; margin-top: 1%;">
            <h3>Bienvenid@ a BookHouse</h3>
            <p> Situado en Palma de Mallorca e inaugurado el 28 de enero de 2015, Es una biblioteca que
                cuenta con un fondo de más de 10.000 libros de todos los generos.<br> 

                La Biblioteca tambien cuenta con servicio de préstamo de libros tanto no electrónicos o como si electrónicos.<br>

                Son bienvenidos todos los niños a partir de 8 años y los más pequeños acompañados de un adulto.<br>
            <pre style="text-decoration: none; border: 0px !important;">Nuestro Horario:
- Lunes a Viernes: 	9.00 a 21.00 horas
- Los Sábados: 	 	8.00 a 14.00 horas
- Los Domingos: 	Cerrado</pre>
        </p>

        <div class="row" style="padding-top: 2%;">
            <div class="col-lg-6 center">

                <div class="containerFotos">
                    <img src="imgs/portada3.png" alt="Avatar" class="imagenes" style="height: 463px !important;">
                    <div class="overlay">
                        <div class="textosLibro">BookHouse</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 center">
                <div class="containerFotos">
                    <img src="imgs/portada2.jpg" alt="Avatar" class="imagenes">
                    <div class="overlay">
                        <div class="textosLibro">BookHouse</div>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="lineaSeparacion"></div>
    </div>
        
    <!--=================================================================-->
    <!-- CONTENEDOR de VIDEO DE YOUTUBE: -->
    <div class="container" style="width:800px; margin-top: 1%;">
    	<div class="embed-responsive embed-responsive-16by9">
    		<iframe width="560" height="315" src="https://www.youtube.com/embed/IbiN9xldVlM?start=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div id="lineaSeparacion" style="margin-bottom: 3%"></div> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48354.946134233905!2d-74.02056152254619!3d40.75797467932688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1ses!2ses!4v1606232974700!5m2!1ses!2ses" width="770" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div id="lineaSeparacion"></div>
    </div>
    <br/><br/>


    <div class="footer">
        <p class="contenidofooter"> Created by: Ankush Bihal  |  Copyrights: 2020 </p>
    </div> 


    <!-- JS -->
    <script src="js/contact.js"></script>

</body>
</html>
