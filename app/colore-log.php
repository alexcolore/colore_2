<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Colore Accesorios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="Grupo Colore">
	<meta name="description" content="Empresa mexicana dedicada a la venta, distribución, mayoreo y menudeo de componentes de accesorios, chapa, aplicaciones, microsetting para armar">
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	</head>
	<body>
	<?php 
	// Get Form Data
	$usr = $_POST['usr'];
	$pwd = $_POST['pwd'];
	include 'colore_cn.php';
	
	$cn = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
	if (mysqli_connect_errno()) {
	    printf("Falló la conexión: %s\n", mysqli_connect_error());
	    exit();
	}
	$db = mysqli_select_db( $cn, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	$consulta = "SELECT * FROM access WHERE user = '$usr' AND p_s = '$pwd' ";
	$resultado = mysqli_query($cn , $consulta);
	if ( $columna = mysqli_fetch_array( $resultado ) ){
		$resultado->close();
		?>
		<div class="container-fluid bg-color-primary h-100">
			<div class="container">
				<div class="row justify-content-center">
					
					<div class="col-3 text-center">
						<h2 class="text-white my-5"><a href=""><img src="../img/logo.svg" alt=""></a></h2>
					</div>
					<div class="col-12 text-center"><h3 class="text-white my-5">Bienvenido a Radio Colore</h3></div>
					<div class="col-12 text-center">
						<audio controls loop preload="auto" class="w-100">
						  <source src="../audio/colore_radio.mp3" type="audio/mpeg">
						</audio>
					</div>

					<div class="col-12">
						<em class="text-white">Recuerda reproducir en su totalidad la música</em>
					</div>
				</div>
			</div>
		</div>
		<?php 
	}

	else{
		?>
			<div class="container-fluid bg-color-primary h-100">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="text-white my-5">No estas autorizado para entrar en esta sección</h2>
						</div>
					</div>
				</div>
			</div>
		<?php
	}
	?>