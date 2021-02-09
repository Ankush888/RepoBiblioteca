<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "biblioteca";
    $limite = $_POST["limiteParam"];
    
    // Crear la conexión
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        header("refresh:2;url=Libros.php");
        die("Fallo al conectarse a la base de datos: " . mysqli_connect_errno());
    }
    
    /* ============================================================================= */
    // Hacemos esta query para saber el TOTAL de los libros que hay en la Data Base
    $query = "SELECT idLibro FROM libro";
    // Ejectamos la query:
    $res = $conn->query($query);
    // Guardamos el valor de total de respuestas que nos devuelve la query: que va ser 21 porque hay 21 libros guardados en la Base de datos.
    $total = $res->num_rows;
    
    // echo "Hay: " + $total + " libros.";
    /* ============================================================================= */
    
    
    // Hacemos esta query para saber el TOTAL de los libros que hay en la Data Base
    $query1 = "SELECT * FROM libro LIMIT $limite, 3";
    $ejecutarQuery = mysqli_query($conn, $query1);
    
    
    echo "<div style='display: block ruby;'>";
    
    /* ============================================================================= */
    // Mostramos el BOTON DE Pagina Anterior:
    if ($limite > 0) {
        $limit = ($limite - 3);
        echo "<fieldset class='bordeExterior' style='width: max-content; margin-left: 3%; margin-right: 58%;'>";
        echo    "<div class='form-group form-button'>";
        echo        "<input type='button' value='Pagina Anterior' onclick=\"cargarlibros2(" . $limit . ")\" name='botonLogout' id='signin' class='form-submit' style='margin-top: 0px; margin-left: 0px; padding: 8px 20px;'/>";
        echo    "</div>";
        echo "</fieldset>";
        
    } else {
        echo "<fieldset class='bordeExterior' style='width: max-content; margin-left: 3%; margin-right: 58%;'>";
        echo    "<div class='form-group form-button'>";
        echo        "<input type='button' value='No Hay más Libros' name='botonLogout' id='signin' class='form-submit' style='margin-top: 0px; margin-left: 0px; padding: 8px 20px;'/>";
        echo    "</div>";
        echo "</fieldset>";
    }
    
    /* ============================================================================= */
    // Mostramos el BOTON DE Pagina Siguente:
    if ($limite < $total - 3) {
        $limit = ($limite + 3);
        echo "<fieldset class='bordeExterior' style='width: max-content;>";
        echo    "<div class='form-group form-button'>";
        echo        "<input type='button' value='Pagina Siguente' onclick=\"cargarlibros2(" . $limit . ")\" name='botonLogout' id='signin' class='form-submit'  style='margin-top: 0px; margin-left: 0px; padding: 8px 20px;'/>";
        echo    "</div>";
        echo "</fieldset>";
        
    } else {
        echo "<fieldset class='bordeExterior' style='width: max-content;>";
        echo    "<div class='form-group form-button'>";
        echo        "<input type='button' value='No Hay más Libros' name='botonLogout' id='signin' class='form-submit'  style='margin-top: 0px; margin-left: 0px; padding: 8px 20px;'/>";
        echo    "</div>";
        echo "</fieldset>";
    }
    echo "</div>";
    
       
    /* ============================================================================= */
    // Mostramos los LIBROS:
    if ($ejecutarQuery->num_rows > 0) {
        echo "<div id='lineaSeparacion'></div><br>";
        
        echo "<div class='containerGeneros'>";
        
        while ($row = mysqli_fetch_array($ejecutarQuery)) {
            echo "<div class='itemsGeneros'>";
            echo    "<div class='containerFotos'>";
            echo        "<img class='imagenes' src='imgs/imgsLibros/" . $row['portadaLibro'] . "' alt='PortadaLibro' style='width: 80%'>";
            echo    "</div><br>";
            echo    "<div id='divSinopsis'>";
            
            echo        "<strong>Autor:</strong><br>";
            echo        "<p>" . $row['autor'] . "</p>";
            
            echo        "<strong>Editorial:</strong><br>";
            echo        "<p>" . $row['editorial'] . "</p>";
            
            echo        "<strong>Nº de Paginas:</strong><br>";
            echo        "<p>" . $row['numPages'] . "</p>";
            
            if ($row['disponibilidad'] == "1") {
                $ladiponibli = "En Stock";
            }else{
                $ladiponibli = "Agotado";
            }
            
            echo        "<strong>Disponibilidad:</strong><br>";
            echo        "<p>" . $ladiponibli . "</p>";
            
            echo        "<strong>Sinopsis:</strong><br>";
            echo        "<p>" . $row['Sinopsis'] . "</p>";
                        
            echo    "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
?>
