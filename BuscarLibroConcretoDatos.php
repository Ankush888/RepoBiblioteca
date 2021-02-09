<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "biblioteca";
    $laSugerencia = $_REQUEST["valorMandadoPorRequest"];
    $libroSolicitado = "'%" . $laSugerencia . "%'";
    
    // Crear la conexión
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (! $conn) {
        header("refresh:2;url=BuscarLibroConcreto.php");
        die("Fallo al conectarse a la base de datos: " . mysqli_connect_errno());
    }
    
    /* ============================================================================= */
    // Esta query nos devuelve todas los titulos iguales/Similares a los del usuario:
    $query = "SELECT libro.titulo FROM libro WHERE titulo LIKE " . $libroSolicitado . ";";
    // Ejectamos la query:
    $ejecutarQuery = $conn->query($query);
    
    if ($ejecutarQuery->num_rows > 0) {
        while ($row = mysqli_fetch_array($ejecutarQuery)) {
            echo "<li>" . $row["titulo"] . "</li>";
        }
    } else {
        echo "No hay sugerencias";
    }
?>
