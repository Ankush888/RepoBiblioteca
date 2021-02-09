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
    $query = "SELECT * FROM libro WHERE titulo LIKE " . $libroSolicitado . ";";
    // Ejectamos la query:
    $ejecutarQuery = $conn->query($query);
    
    /* ============================================================================= */
    if ($ejecutarQuery->num_rows > 0) {
        echo "<table id='laTabla'><tbody>";
        echo "<tr> <th> Titulo: </th>
                           <th> Autor: </th>
                           <th> Editorial: </th>
                           <th> Nº Paginas: </th>
                           <th> Disponibilidad: </th>
                           <th> Reservar Libro: </th></tr>";
    
        while ($row = mysqli_fetch_array($ejecutarQuery)) {
            if ($row['disponibilidad'] == "1") {
                $ladiponibli = "En Stock";
            } else {
                $ladiponibli = "Agotado";
            }
    
            echo "<tr>";
            echo "<td> " . $row['titulo'] . "</td>";
            echo "<td> " . $row['autor'] . "</td>";
            echo "<td> " . $row['editorial'] . "</td>";
            echo "<td> " . $row['numPages'] . "</td>";
            echo "<td> " . $ladiponibli . "</td>";
            echo "<td> <button id='btnReservando' class='buttonReservar button3'>Reservar</button></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p id='respuestaNegativaResul' style='margin-left: 4%;font-weight: bold;'>No se encontraron libros con ese titulo.</p>";
    }
?>
