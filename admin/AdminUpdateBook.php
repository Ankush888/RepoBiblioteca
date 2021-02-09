<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Modificar Libro - BookHouse</title>
<link rel="icon" type="image/png" href="../imgs/logoPrincipal.jpg">

<!-- CSS: -->

<!-- CSS: -->
<link rel="stylesheet" type="text/css" href="../css/ColorLibros.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/main.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



<link rel="stylesheet" type="text/css" href="../css/ColorRegistrar.css" />
<link rel="stylesheet" type="text/css" href="../fonts/material-icon/css/material-design-iconic-font.min.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<style type="text/css">
#laTabla {
	border-collapse: collapse;
	width: 99%;
	margin-left: auto;
	margin-right: auto;
	border: 3px solid;
	background: #83a4d4; /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #b6fbff, #83a4d4);
	/* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #b6fbff, #83a4d4);
	/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

td {
	padding: 2px;
	font-size: 10px;
	border: 3px solid;
}

tr:nth-child(even) {
	background-color: #f2f2f2
}

th {
	text-align: center;
	background-color: #4CAF50;
	color: black;
	padding: 6px;
	border: 3px solid;
}

#notaTotal {
	text-align: center;
}

#tdNotas {
	text-align: right;
	padding: 6px;
}

#tdMedia {
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
						<li><a class="icon solid fa-home"
							href="BienvenidaPageBibliotecario.php"><span>Home</span></a></li>
						<li><a class="icon solid fa-home" href="AdminAddBook.php"><span>Add
									Book</span></a></li>
						<li><a href="BienvenidaPageBibliotecario.php"><img
								id="logoPrincipal" src="../imgs/logoPrincipal.jpg"
								alt="Logo Principal"></a></li>
						<li><a class="icon solid fa-home" href="AdminUpdateBook.php"><span>Update
									Book</span></a></li>
						<li><a class="icon solid fa-home" href="AdminDeleteBook.php"><span>Delete
									Book</span></a></li>
					</ul>
				</nav>
			</div>
		</section>
	</div>



	<!--=================================================================-->
	<!-- CONTENEDOR de TODOS LOS LIBROS: -->
	<div class="container" style="width: 800px; margin-top: 1%;">
		<div class="itemsGeneros-head">
			<p>Lista de Todos los Libros para Modificar:</p>
			<hr>
		</div>
		<br>

		<!-- Desde aqui hacia abajo es para MOSTRAR todos los Libros === -->
		<table id='laTabla'>
			<tbody>
				<tr>
					<th>idLibro:</th>
					<th>Titulo:</th>
					<th>Autor:</th>
					<th>Editorial:</th>
					<th>Disponibilidad:</th>
					<th>Nº Paginas:</th>
				</tr>
			
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "biblioteca";

                // Crear la conexión
                $conn = mysqli_connect($servername, $username, $password, $database);

                if (! $conn) {
                    header("refresh:2;url=AdminUpdateBook.php");
                    die("Fallo al conectarse a la base de datos: " . mysqli_connect_errno());
                }

                /* Seleccionamos todos los datos de la tabla: */
                $query = "SELECT * FROM libro";

                $ejecutarQuery = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($ejecutarQuery)) {
                    if ($row['disponibilidad'] == "1") {
                        $ladiponibli = "En Stock";
                    } else {
                        $ladiponibli = "Agotado";
                    }
                    ?>
                <tr>
					<td> <?php echo $row['idLibro']?></td>
					<td> <?php echo $row['titulo']?></td>
					<td> <?php echo $row['autor']?></td>
					<td> <?php echo $row['editorial']?></td>
					<td> <?php echo $ladiponibli ?></td>
					<td> <?php echo $row['numPages']?></td>
				</tr>
                <?php } ?>
            </tbody>
		</table>

		<div id="lineaSeparacion"></div>

		<div class="itemsGeneros-head">
			<p>Importante:</p>
			<hr>
		</div>
		<p
			style="margin-left: auto; margin-right: auto; width: 92%; display: block;">
			<strong> Para Modificar un libro Intrduzca el mismo idLibro del libro
				a modificar que aparece en la lista de Libros</strong>
		</p>

	</div>


	<!-- Sign up form -->
	<section class="signup" style="margin-top: 30px;">
		<div class="container" style="padding-bottom: 0px; height: 600px;">
			<div class="signup-content">
				<div class="signup-form">
					<h2 class="form-title"
						style="margin-bottom: 15px !important; font-size: 26px;">Modificar 
						Libro</h2>
					<form action="AdminUpdateBookDatos.php" method="POST"
						class="register-form" id="register-form">
						<div class="form-group">
							<label for="name"><i
								class="zmdi zmdi-account material-icons-name"></i></label> <input
								type="text" name="datoIdLibro" id="name" placeholder="idLibro"
								required />
						</div>
						<div class="form-group">
							<label for="name"><i
								class="zmdi zmdi-account material-icons-name"></i></label> <input
								type="text" name="datoTitulo" id="name" placeholder="Titulo"
								required />
						</div>

						<div class="form-group">
							<label for="name"><i
								class="zmdi zmdi-account material-icons-name"></i></label> <input
								type="text" name="datoAutor" placeholder="Autor" required />
						</div>

						<div class="form-group">
							<label for="email"><i class="zmdi zmdi-email"></i></label> <input
								type="text" name="datoEditorial" placeholder="Editorial"
								required />
						</div>

						<div class="form-group">
							<label for="email"><i class="zmdi zmdi-email"></i></label> <input
								type="text" name="datoSinopsis" placeholder="Sinopsis" required />
						</div>

						<div class="form-group">
							<label for="name"><i
								class="zmdi zmdi-account material-icons-name"></i></label> <input
								type="text" name="datoDisponiblidad"
								placeholder="Disponibilidad" required />
						</div>

						<div class="form-group">
							<label for="name"><i
								class="zmdi zmdi-account material-icons-name"></i></label> <input
								type="text" name="datoNumPage" placeholder="Nº Paginas" required />
						</div>

						<div class="form-group form-button">
							<input type="submit" name="botonUpdate" id="signup"
								class="form-submit" value="Modificar"
								style="margin-top: 0px !important;" />
						</div>
					</form>
				</div>


				<div class="signup-image">
					<figure>
						<img src="../imgs/signup-image.jpg" alt="sing up image">
					</figure>
				</div>
			</div>
		</div>
	</section>

	<div class="footer">
		<p class="contenidofooter">Created by: Ankush Bihal | Copyrights: 2020
		</p>
	</div>


	<!-- JS -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>
