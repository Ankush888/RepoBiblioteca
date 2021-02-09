<!DOCTYPE html>

<?php session_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Books - BookHouse</title>
        <link rel="icon" type="image/png" href="imgs/logoPrincipal.jpg">

        <!-- CSS: -->
        <link rel="stylesheet" type="text/css" href="css/ColorLibros.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="js/loadLibros1.js"></script>
        <script src="js/loadLibros2.js"></script>

        <style type="text/css">
            .containerFotos {
                width: 100%;
            }

            .buttonReservar {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 8px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                transition-duration: 0.4s;
                cursor: pointer;
                border-radius: 10px;
            }

            .button3 {
                background-color: white;
                color: black;
                border: 2px solid #f44336;
            }

            .button3:hover {
                background-color: gainsboro;
                color: red;
                border: 2px solid lavender;
            }

            .imagenes {
                width: max-content;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

            .overlay {
                position: absolute;
                bottom: 30%;
                left: 7%;
                right: 0;
                background-color: unset;
                overflow: hidden;
                height: 0;
                transition: .5s ease;
                width: 50%;
            }

            .containerFotos:hover .overlay {
                height: 50%;
            }

            .textoLibros {
                white-space: nowrap;
                color: red;
                font-size: 15px;
                position: absolute;
                overflow: hidden;
                top: 6%;
                left: 20%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                margin-left: 10%;
                font-weight: bold;
            }

            #divSinopsis {
                margin-left: auto;
                margin-right: auto;
                display: block;
                width: 80%;
            }

            a {
                cursor: pointer;
            }

            .anterior, .siguiente {
                cursor: pointer;
                display: block;
                text-aling: center;
                width: 50px;
            }
        </style>
    </head>


    <body style="background: #f8f8f8 !important;">
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header">
                <div class="container" style="width: 900px;">
                    <!-- Nav -->
                    <nav id="nav">
                        <ul id="ulList">
                            <li><a class="icon solid fa-home" href="BienvenidaPage.php"><span>Home</span></a></li>
                            <li><a class="icon solid fa-home" href="Libros.php"><span>Books</span></a></li>
                            <li><a href="BienvenidaPage.php"><img id="logoPrincipal"
                                                                  src="imgs/logoPrincipal.jpg" alt="Logo Principal"></a></li>
                            <li><a class="icon solid fa-home" href="BuscarLibroConcreto.php"><span>Find
                                        & Booking</span></a></li>
                            <li><a class="icon solid fa-home" href="Contact.php"><span>Contact</span></a></li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>

        <form action="Logout.php" method="post">
            <fieldset class="bordeExterior">
                <div class="form-group form-button">
                    <input type="submit" name="botonLogout" id="signin"
                           class="form-submit" value="Cerrar sesión"
                           style="margin-top: 8px; margin-left: 64.5%;" />
                </div>
            </fieldset>
        </form>

        <p id="socialmedia"
           style='margin-left: 0%; font-size: x-large; color: black;'> <?php echo " " . $_SESSION["loggeado"]; ?>
            <a href="https://www.facebook.com/" target="_blank"><img
                    id="imgsContact" src="imgs/ImgFacebook.png" alt="Facebook"
                    style="margin-left: 36%;"></a> <a href="https://twitter.com/?lang=es"
                                              target="_blank"><img id="imgsContact" src="imgs/ImgTwitter.png"
                                 alt="Twitter"></a> <a href="https://www.instagram.com/?hl=es"
                                  target="_blank"><img id="imgsContact" src="imgs/ImgInstagram.png"
                                 alt="Instagram"></a> <a href="https://www.gmail.com" target="_blank"><img
                    id="imgsContact" src="imgs/ImgGmail.png" alt="Gmail"></a>
        </p>

        <!--=================================================================-->
        <!--CONTENEDOR LIBROS DESTACADOS: -->
        <div class="container" style="width: 800px; margin-top: 1%;">
            <div class="containerGeneros">
                <div class="itemsGeneros">
                    <div class="itemsGeneros-head">
                        <p>Libros Destacados:</p>
                        <hr>
                    </div>
                    <br>

                    <div class="containerFotos">
                        <img class="imagenes" src="imgs/imgsLibros/libDestacado1.jpg"
                             alt="Facebook" style="width: 80%">
                        <div class="overlay" style="left: 3% !important">
                            <div class="textoLibros">Autor: Victoria Aveyard</div>
                            <div class="textoLibros" style="top: 20% !important">Editorial:
                                Oceano</div>
                            <br>
                        </div>
                    </div>
                    <br>

                    <div id="divSinopsis">
                        <strong>Nº de Paginas:</strong><br>
                        <p>469</p>
                        <strong>Disponibilidad:</strong><br>
                        <p>En Stock</p>
                        <strong>Sinopsis:</strong><br>
                        <p>Ambientada en un reino imaginario, esta novela nos muestra a una
                            sociedad dividida por el color de la sangre. Por un lado está la
                            gente común que tiene sangre roja; por el otro tenemos a aquellos
                            que poseen sangre plateada y que tienen habilidades
                            sobrenaturales.</p>
                    </div>
                </div>

                <!--=================================================================-->
                <div class="itemsGeneros">
                    <div class="itemsGeneros-head">
                        <br> <br> <br>
                        <hr>
                    </div>
                    <br>

                    <div class="containerFotos">
                        <img class="imagenes" src="imgs/imgsLibros/libDestacado2.jpg"
                             alt="Facebook" style="width: 80%">
                        <div class="overlay" style="left: 35% !important">
                            <div class="textoLibros">Autor: E.K. Johiston</div>
                            <div class="textoLibros" style="top: 20% !important">Editorial:
                                Planeta de Agostini</div>
                            <br>
                        </div>
                    </div>
                    <br>

                    <div id="divSinopsis">
                        <strong>Nº de Paginas:</strong><br>
                        <p>288</p>
                        <strong>Disponibilidad:</strong><br>
                        <p>En Stock</p>
                        <strong>Sinopsis:</strong><br>
                        <p>Siguiendo sus vivencias con los Jedi y la devastación provocada
                            por la Orden 66, Ahsoka siente que no podrá formar parte de otra
                            alianza nunca más. Pero su deseo de combatir el mal del Imperio y
                            proteger aquellos que lo necesitan la llevará hasta Bail Organa y
                            la Alianza rebelde.</p>
                    </div>
                </div>

                <!--=================================================================-->
                <div class="itemsGeneros">
                    <div class="itemsGeneros-head">
                        <br> <br> <br>
                        <hr>
                    </div>
                    <br>

                    <div class="containerFotos">
                        <img class="imagenes" src="imgs/imgsLibros/libDestacado3.jpg"
                             alt="Facebook" style="width: 80%">
                        <div class="overlay" style="left: 68% !important">
                            <div class="textoLibros">Autor: ELOY MORENO</div>
                            <div class="textoLibros" style="top: 20% !important">Editorial:
                                NUBE DE TINTA</div>
                            <br>
                        </div>
                    </div>
                    <br>

                    <div id="divSinopsis">
                        <strong>Nº de Paginas:</strong><br>
                        <p>304</p>
                        <strong>Disponibilidad:</strong><br>
                        <p>En Stock</p>
                        <strong>Sinopsis:</strong><br>
                        <p>
                            Emotiva, conmovedora, diferente...Invisiblenarra, a través de los
                            ojos de un niño, una historia que podría ser la de cualquiera de
                            nosotros. ¿Quién no ha deseado alguna vez ser invisible?<br>
                            ¿Quién no ha deseado alguna vez dejar de serlo?<br> El problema es
                            que nunca he llegado a controlar bien.
                        </p>
                    </div>
                </div>
            </div>
            <div id="lineaSeparacion"></div>

        </div>


        <!--=================================================================-->
        <!-- CONTENEDOR de los LIBROS MAS VENDIDOS: -->
        <div class="container" style="width: 800px; margin-top: 1%;">
            <div class="itemsGeneros-head">
                <p>Los más vendidos en BookHouse:</p>
                <hr>
            </div>
            <br>

            <div id="imprimirLibros2"></div>
            <div id="lineaSeparacion"></div>
        </div>
        <br>
        <br>


        <!--=================================================================-->
        <!-- CONTENEDOR de Libros DE LOS QUE TODOS HABLAN:: -->
        <div class="container" style="width: 800px; margin-top: 1%;">
            <div class="itemsGeneros-head">
                <p>Los libros de los que todos hablan:</p>
                <hr>
            </div>
            <br>

            <div id="imprimirLibros1"></div>
            <div id="lineaSeparacion"></div>
        </div>


        <!--=================================================================-->
        <!--CONTENEDOR TODOS LOS GENEROS: -->
        <div class="container" style="width: 800px; margin-top: 1%;">

            <div class="containerGeneros">
                <div class="itemsGeneros">

                    <div class="itemsGeneros-head">
                        <p>Todos los Géneros:</p>
                        <hr>
                    </div>

                    <div class="itemsGeneros-body">
                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo1">Arte (14557)</span>
                        </div>
                        <div id="demo1" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo2"> Autoayuda
                                (7016)</span>
                        </div>
                        <div id="demo2" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo3"> Ciencias
                                Humanas (16686)</span>
                        </div>
                        <div id="demo3" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo4"> Ciencias
                                Políticas (18842)</span>
                        </div>
                        <div id="demo4" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo5"> Cocina (2666)</span>
                        </div>
                        <div id="demo5" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>PAN TARTINE</a></li>
                                <li><a>COCINA SIN VERGUENZA</a></li>
                                <li><a>SEIS MIL AÑOS DE PAN</a></li>
                                <li><a>LA REINA ROJA</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!--==================================================================-->
                <div class="itemsGeneros">
                    <br> <br> <br>
                    <div class="itemsGeneros-body">
                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo6"> Economía (9003)</span>
                        </div>
                        <div id="demo6" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CAPITALISMO (1679-2065)</a></li>
                                <li><a>EL INVERSOR INTELIGENTE</a></li>
                                <li><a>EL PATRÓN BITCOIN</a></li>
                                <li><a>EL CODIGO DEL DINERO</a></li>
                                <li><a>LIBERTAD O IGUALDAD </a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo7"> Empresa (3954)</span>
                        </div>
                        <div id="demo7" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo8"> Historia
                                (37621)</span>
                        </div>
                        <div id="demo8" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo9"> Idiomas (1148))</span>
                        </div>
                        <div id="demo9" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo10">Juvenil (18247)</span>
                        </div>
                        <div id="demo10" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>STAR WARS AHSOKA</a></li>
                                <li><a>INVISIBLE</a></li>
                                <li><a>PATRIA</a></li>
                                <li><a>DIME QUIEN SOY</a></li>
                                <li><a>1984</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>
                <!--==================================================================-->
                <div class="itemsGeneros">
                    <br> <br> <br>
                    <div class="itemsGeneros-body">
                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo11"> Literatura
                                (54068)</span>
                        </div>
                        <div id="demo11" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo12"> Medicina
                                (5162)</span>
                        </div>
                        <div id="demo12" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo13"> Música (1663)</span>
                        </div>
                        <div id="demo13" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo14">Psicología
                                (15849)</span>
                        </div>
                        <div id="demo14" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>

                        <div class="itemsGeneros-body-content">
                            <span data-toggle="collapse" data-target="#demo15">Salud y Dietas
                                (3264)</span>
                        </div>
                        <div id="demo15" class="collapse"
                             style="margin-left: inherit; margin-right: auto; width: 100%;">
                            <ul style="list-style-type: square;">
                                <li><a>CURSO DISEÑO GRAFICO</a></li>
                                <li><a>EL GRAN RESCATE</a></li>
                                <li><a>ESPÍA DE LA MODA</a></li>
                                <li><a>EL RENACIMIENTO ITALIANO</a></li>
                                <li><a>DISEÑO Y EVALUACION</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lineaSeparacion"></div>
        </div>
        <br>


        <div class="footer">
            <p class="contenidofooter">Created by: Ankush Bihal | Copyrights: 2020
            </p>
        </div>

    </body>
</html>
