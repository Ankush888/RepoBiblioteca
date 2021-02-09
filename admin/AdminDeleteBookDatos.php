<?php
    // Aqui hacemos la comprobacion de si el Boton Registrar se pulsa que haga lo siguente:
    if (isset($_POST["botonDelete"])) {
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "biblioteca";
    
        // Aqui hacemos la comprobacion de si en el campos de datos hay algo que se haga lo siguente:
        if (isset($_POST["datoIdLibro"])) {
            
            // Guardar datos del formulario en variables:
            $infoidLibro = $_POST['datoIdLibro'];
                
            // Crear la conexión
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                header("refresh:2;url=AdminDeleteBook.php");
                die("Fallo al conectarse a la base de datos: " . mysqli_connect_errno());
            }
    
            /* Eliminamos el Libro: */
            $sql  = "DELETE FROM libro WHERE idLibro = '$infoidLibro';";
            
            if (mysqli_query($conn, $sql)) {
                echo "<script type='text/javascript'> alert('Libro Eliminado correctamente.'); window.location.href='AdminDeleteBook.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_errno($conn);
                echo "<script type='text/javascript'> alert('Error!!! Al Eliminar Libro'); window.location.href='AdminDeleteBook.php';</script>";
            }
        }
    }
?>
