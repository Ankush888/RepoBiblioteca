<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Añadir Libro - BookHouse</title>
        <link rel="icon" type="image/png" href="../imgs/logoPrincipal.jpg">

        <!-- CSS: -->
        <link rel="stylesheet" type="text/css" href="../css/ColorRegistrar.css"/>
        <link rel="stylesheet" type="text/css" href="../fonts/material-icon/css/material-design-iconic-font.min.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    </head>


      <body style="background: #f8f8f8 !important;">
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header">
                <div class="container" style="width:900px;">
                    <!-- Nav -->
                    <nav id="nav">
                        <ul id="ulList">
                            <li><a class="icon solid fa-home" href="BienvenidaPageBibliotecario.php"><span>Home</span></a></li>
                            <li><a class="icon solid fa-home" href="AdminAddBook.php"><span>Add Book</span></a></li>
                            <li><a href="BienvenidaPageBibliotecario.php"><img id="logoPrincipal" src="../imgs/logoPrincipal.jpg" alt="Logo Principal"></a></li>
                            <li><a class="icon solid fa-home" href="AdminUpdateBook.php"><span>Update Book</span></a></li>
                            <li><a class="icon solid fa-home" href="AdminDeleteBook.php"><span>Delete Book</span></a></li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>


        <!-- Sign up form -->
        <section class="signup" style="margin-top: 30px;">
            <div class="container" style="padding-bottom: 0px;height: 480px;">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="margin-bottom: 15px!important; font-size: 26px;">Añadir Libro Nuevo</h2>
                        <form action="AdminAddBookDatos.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoTitulo" id="name" placeholder="Titulo" required/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoAutor" placeholder="Autor" required/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="datoEditorial" placeholder="Editorial" required/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="datoSinopsis" 	placeholder="Sinopsis" required/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoDisponiblidad" placeholder="Disponibilidad" required/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoNumPage" placeholder="Nº Paginas" required/>
                            </div>
                                  
                            <div class="form-group form-button">
                                <input type="submit" name="botonAdd" id="signup" class="form-submit" value="Añadir" style="margin-top: 0px!important;"/>
                            </div>
                        </form>
                    </div>


                    <div class="signup-image">
                        <figure><img src="../imgs/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer">
            <p class="contenidofooter"> Created by: Ankush Bihal  |  Copyrights: 2020 </p>
        </div> 


        <!-- JS -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/main.js"></script>
        
    </body>
</html>
