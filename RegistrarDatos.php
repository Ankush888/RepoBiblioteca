<?php
    // Aqui hacemos la comprobacion de si el Boton Registrar se pulsa que haga lo siguente:
    if (isset($_POST["botonRegistrar"])) {
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "biblioteca";
    
        // Aqui hacemos la comprobacion de si en el campos de datos hay algo que se haga lo siguente:
        if (isset($_POST["datoNombre"]) && isset($_POST["datoApellidos"]) && isset($_POST["datoEmail"]) && isset($_POST["datoFechaNacimiento"]) && isset($_POST["datoDirrecion"]) && isset($_POST["datoPoblacion"]) && isset($_POST["datoCp"]) && isset($_POST["datoUsuarioNombre"]) && isset($_POST["pass1"]) && isset($_POST["pass2"])) {
    
            // Guardar datos del formulario en variables:
            $infoNombre = $_POST['datoNombre'];
            $infoApellidos = $_POST['datoApellidos'];
            $infoEmail = $_POST['datoEmail'];
            $infoFechaNacimiento = $_POST['datoFechaNacimiento'];
            $infoDirrecion = $_POST['datoDirrecion'];
            $infoPoblacion = $_POST['datoPoblacion'];
            $infoCp = $_POST['datoCp'];
            $infoUsuarioNombre = $_POST['datoUsuarioNombre'];
            $infoPass1 = $_POST['pass1'];
            $infoPass2 = $_POST['pass2'];
    
            $hash = password_hash($infoPass1, PASSWORD_DEFAULT);
    
            // Crear la conexión
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                header("refresh:2;url=Registrar.php");
                die("Fallo al conectarse a la base de datos: " . mysqli_connect_errno());
            }
    
            /* Insetamos los datos del Registr del Usuario Nuevo: */
            $sql = "INSERT INTO usuario (nombre, apellidos, email, fecha_Nacimiento, direccion, polacion, cp, nombreUsuario, pass) VALUES ('$infoNombre', '$infoApellidos', '$infoEmail', '$infoFechaNacimiento', '$infoDirrecion', '$infoPoblacion', '$infoCp', '$infoUsuarioNombre', '$hash' );";
    
            if ($infoPass1 == $infoPass2) {
    
                if (mysqli_query($conn, $sql)) {
                    echo "<script type='text/javascript'> alert('Usuario Añadido correctamente.'); window.location.href='Registrar.php';</script>";
                } else {
                    header("refresh:2;url=Registrar.php");
                    echo "Error: " . $sql . "<br>" . mysqli_errno($conn);
                }
            } else {
                echo "<script type='text/javascript'> alert('Las Contraseñas no conciden'); window.location.href='Registrar.php';</script>";
            }
        }
    }
?>
