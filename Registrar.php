<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Registro - BookHouse</title>
        <link rel="icon" type="image/png" href="imgs/logoPrincipal.jpg">

        <!-- CSS: -->
        <link rel="stylesheet" type="text/css" href="css/ColorRegistrar.css"/>
        <link rel="stylesheet" type="text/css" href="fonts/material-icon/css/material-design-iconic-font.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <!-- JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </head>


    <body class="homepage is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header">
                <div class="container">
                    <!-- Nav -->
                    <nav id="nav">
                        <ul id="ulList">
                            <li><a href="Main.php"><img id="logoPrincipal" src="imgs/logoPrincipal.jpg" alt="Logo Principal"></a></li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>

        <!-- Sign up form -->
        <section class="signup" style="margin-top: 30px;">
            <div class="container" style="padding-bottom: 0px;height: 680px;">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="margin-bottom: 15px!important;">Registrarse</h2>
                        <form action="RegistrarDatos.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoNombre" id="name" placeholder="Nombre" required/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoApellidos" placeholder="Apellidos" required/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="datoEmail" placeholder="Email" required/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="datoFechaNacimiento" placeholder="Fecha Nacimiento (Ej: 28-06-1990)" required/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoDirrecion" placeholder="Direccion" required/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoPoblacion" placeholder="Poblacion" required/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoCp" placeholder="Codigo Postal(Ej: 07005)" required/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="datoUsuarioNombre" placeholder="Alias Usuario" required/>
                            </div>

                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass1" placeholder="Contraseña" required/>
                            </div>

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="pass2" placeholder="Repetir Contraseña" required/>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="botonRegistrar" id="signup" class="form-submit" value="Register" style="margin-top: 0px!important;"/>
                            </div>
                        </form>
                    </div>


                    <div class="signup-image">
                        <figure><img src="imgs/signup-image.jpg" alt="sing up image"></figure>
                        <a href="Main.php" class="signup-image-link">Ya Tengo Cuenta</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer">
            <p class="contenidofooter"> Created by: Ankush Bihal  |  Copyrights: 2020 </p>
        </div> 
        
    </body>
</html>
