<!DOCTYPE html>

<html class="este" id="aqui">
<head>
<meta charset="UTF-8">
<title>Login Admin - BookHouse</title>
<link rel="icon" type="image/png" href="../imgs/logoPrincipal.jpg">

<!-- CSS: -->
<link rel="stylesheet" type="text/css" href="../css/ColorMain.css" />
<link rel="stylesheet" type="text/css" href="../fonts/material-icon/css/material-design-iconic-font.min.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />

<!-- JS -->
<script src="../js/jquery.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/mainRedirectionPages.js"></script>
</head>


<body class="homepage is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header">
			<div class="container">
				<!-- Nav -->
				<nav id="nav">
					<ul id="ulList">
						<li><a href="../Main.php"><img id="logoPrincipal" src="../imgs/logoPrincipal.jpg" alt="Logo Principal"></a></li>
						<li><a class="icon solid fa-home" href="MainAdmin.php" style="margin-left: 480%!important;"><span>Admin</span></a></li>
					</ul>
				</nav>
			</div>
		</section>
	</div>

	<!-- Sing in  Form -->
	<section class="sign-in" style="margin-top: 30px;">
		<div class="container" style="padding-bottom: 0px; height: 405.9px;">
			<div class="signin-content">
				<div class="signin-image">
					<figure>
						<img src="../imgs/signin-image.jpg" alt="sing up image">
					</figure>
				</div>

				<div class="signin-form" style="margin-top: 4% !important;">
					<h2 class="form-title" style="font-size: 28px!important;">Admin BookHouse</h2>
					<form action="BienvenidaPageBibliotecario.php" method="POST"
						class="register-form" id="login-form">
						<div class="form-group">
							<label for="your_name"><i
								class="zmdi zmdi-account material-icons-name"></i></label> <input
								type="text" name="datoUsuarioNombre" id="your_name"
								placeholder="Alias Usuario" required />
						</div>

						<div class="form-group">
							<label for="your_pass"><i class="zmdi zmdi-lock"></i></label> <input
								type="password" name="pass" id="your_pass"
								placeholder="Contraseña" required />
						</div>

						<div class="form-group form-button">
							<input type="submit" name="botonEntrar" id="signin"
								class="form-submit" value="Entrar" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<div class="footer">
		<p class="contenidofooter">Created by: Ankush Bihal | Copyrights: 2020
		</p>
	</div>

</body>
</html>
