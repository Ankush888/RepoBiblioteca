<?php
    // Aqui hacemos la comprobacion de si el Boton Registrar se pulsa que haga lo siguente:
    if (isset($_POST["botonUpdate"])) {
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "biblioteca";
    
        // Aqui hacemos la comprobacion de si en el campos de datos hay algo que se haga lo siguente:
        if (isset($_POST["datoIdLibro"]) && isset($_POST["datoTitulo"]) && isset($_POST["datoAutor"]) && isset($_POST["datoEditorial"]) && isset($_POST["datoSinopsis"]) && isset($_POST["datoDisponiblidad"]) && isset($_POST["datoNumPage"])) {
            
            // Guardar datos del formulario en variables:
            $infoidLibro = $_POST['datoIdLibro'];
            $infoTitulo = $_POST['datoTitulo'];
            $infoAutor = $_POST['datoAutor'];
            $infoEditorial = $_POST['datoEditorial'];
            $infoSinopsis = $_POST['datoSinopsis'];
            $infoDisponiblidad = $_POST['datoDisponiblidad'];
            $infoNumPage = $_POST['datoNumPage'];
            
            // Crear la conexión
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                header("refresh:2;url=AdminUpdateBook.php");
                die("Fallo al conectarse a la base de datos: " . mysqli_connect_errno());
            }
    
            /* Insetamos datos: */
            $sql  = "UPDATE libro SET titulo = '$infoTitulo',
                                    autor = '$infoAutor',
                                   editorial = '$infoEditorial',
                                   Sinopsis = '$infoSinopsis',
                                   disponibilidad =  '$infoDisponiblidad',
                                   numPages =  '$infoNumPage' WHERE idLibro = '$infoidLibro';";
            
            if (mysqli_query($conn, $sql)) {
                echo "<script type='text/javascript'> alert('Libro Modificado correctamente.'); window.location.href='AdminUpdateBook.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_errno($conn);
                echo "<script type='text/javascript'> alert('Error!!! Al Modificar Libro'); window.location.href='AdminUpdateBook.php';</script>";
            }
        }
    }
?>
