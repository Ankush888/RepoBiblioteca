<!DOCTYPE html>

<?php session_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Find Book - BookHouse</title>
        <link rel="icon" type="image/png" href="imgs/logoPrincipal.jpg">

        <!-- CSS: -->
        <link rel="stylesheet" type="text/css" href="css/ColorLibros.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- JS -->
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="js/loadLibros2.js"></script>

        <style type="text/css">
            .containerFotos {
                width: 100%;
            }

            .buttonReservar {
                background-color: white; /* Green */
                border: none;
                padding: 8px 10px;
                text-decoration: none;
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button3 {
                background-color: white;
                color: black;
                border: 2px solid black;
                width: -moz-available;

            }

            .button3:hover {
                background-color: #4CAF50;
                color: black;
                border: 2px solid black;
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

            #textoBuscador{
                width: 25%;
                text-align: center;
                margin-top: auto;
                margin-bottom: auto;
                font-weight: bold;
            }
            .buscador{
                display: inline-block;
                border-radius: 10px;
                padding: 20px 12px;
                border: 2px solid black;
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            }

            .online-form{
                margin-left: auto;
                margin-right: auto;
                width: 92%;
                display: flex;
            }
            .online-form .buscador {
                border-radius: 10px;
            }

            .online-form button {
                background: #202020;
                border: 2px solid black;
                color: #ffffff;
                width: 25%;
            }

            .online-form button:hover {
                background: #4292dc;
                color: #ffffff;
                border: 2px solid black;
            }   

            #laTabla{
                border-collapse: collapse;
                width: 99%;
                margin-left: auto;
                margin-right: auto;
                border: 3px solid;
                background: #83a4d4;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #b6fbff, #83a4d4);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #b6fbff, #83a4d4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }

            td {
                padding: 2px;
                font-size: 10px;
                border: 3px solid;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
                text-align: center;
                background-color: #4CAF50;
                color: black;
                padding: 6px;
                border: 3px solid;
            }

            #notaTotal{
                text-align: center;
            }

            #tdNotas{
                text-align: right;
                padding: 6px;
            }

            #tdMedia{
                text-align: right !important;
                padding: 6px;
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
                    <input type="submit" name="botonLogout" id="signin" class="form-submit" value="Cerrar sesión" style="margin-top: 8px; margin-left: 64.5%;" />
                </div>
            </fieldset>
        </form>

        <p id="socialmedia"
           style='margin-left: 0%; font-size: x-large; color: black;'> <?php echo " " . $_SESSION["loggeado"]; ?>
            <a href="https://www.facebook.com/" target="_blank"><img id="imgsContact" src="imgs/ImgFacebook.png" alt="Facebook" style="margin-left: 36%;"></a>
            <a href="https://twitter.com/?lang=es" target="_blank"><img id="imgsContact" src="imgs/ImgTwitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/?hl=es" target="_blank"><img id="imgsContact" src="imgs/ImgInstagram.png" alt="Instagram"></a> 
            <a href="https://www.gmail.com" target="_blank"><img id="imgsContact" src="imgs/ImgGmail.png" alt="Gmail"></a>
        </p>

        <!--=================================================================-->
        <!--CONTENEDOR BUSCADOR DE LIBROS: -->
        <div class="container" style="width: 800px; margin-top: 1%;">

            <div class="itemsGeneros-head">
                <p>Encuentra cualquier libro por su título:</p>
                <hr>
            </div>
            <br> 
            <form method="POST" class="online-form"><h4 id="textoBuscador">Buscar Libro:  </h4>
                <input type="text" id="ips" name="textoBuscado" class="buscador" onkeyup="mostrarSugerencias(this.value); mostrarSugerencias2(this.value)" placeholder="Libros Ej: Patria, Invisible, Star Wars, Etc...">
                <!--     	<button id="btnBuscar" type="submit" class="buscador" onclick="mostrarSugerencias2()">Buscar Libro</button>		
                --> </form>
            <br>

            <strong>Sugerencias de Libros:</strong>
            <br>
            <ul id=salida style="list-style-type: square;width: 50%;margin-left: auto;margin-right: 35%;" ></ul>
            <div id="lineaSeparacion"></div>
            <br>

            <div class="itemsGeneros-head">
                <p>Todos los libros encontrados:</p>
                <hr>
            </div><br>
            <div id="imprimirLibrosSugerencia"></div>
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
        <div class="footer">
            <p class="contenidofooter">Created by: Ankush Bihal | Copyrights: 2020
            </p>
        </div>

        <script type="text/javascript">

            function mostrarSugerencias(str) {
                var valorUsuario;

                if (str.length == 0) { //si no hemos escrito nada en el input, las sugerencias nos van a salir vac�as.
                    document.getElementById('salida').innerHTML = '';
                } else {
                    valorUsuario = str;

                    // AJAX:
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById('salida').innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "BuscarLibroConcretoDatos.php?valorMandadoPorRequest=" + valorUsuario, true);
                    xmlhttp.send();
                }
            }


            function mostrarSugerencias2(str) {
                var valorUsuario;

                if (str.length == 0) { //si no hemos escrito nada en el input, las sugerencias nos van a salir vac�as.
                    document.getElementById('imprimirLibrosSugerencia').innerHTML = '';
                } else {
                    valorUsuario = str;

                    // AJAX:
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById('imprimirLibrosSugerencia').innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "BuscarLibroConcretoResultado.php?valorMandadoPorRequest=" + valorUsuario, true);
                    xmlhttp.send();
                }
            }
        </script>

    </body>
</html>
