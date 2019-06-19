<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Colore Accesorios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="Grupo Colore">
	<meta name="description" content="Empresa mexicana dedicada a la venta, distribución, mayoreo y menudeo de componentes de accesorios, chapa, aplicaciones, microsetting para armar">
	<meta name="keywords" content="accesorios,joyeria,bisuteria,mayoreo,joyeria de acero inoxidable">
	<meta name="robots" content="index, follow">
	<link rel="dns-prefetch" href="//coloreaccesorios.com">
	<link rel="dns-prefetch" href="//coloreaccesorios.com.mx">
	<link rel="dns-prefetch" href="//coloreacero.com">
	<link rel="dns-prefetch" href="//coloreaplicaciones.com">
	<link rel="dns-prefetch" href="//colorechapas.com">
	<link rel="dns-prefetch" href="//modarma.com.mx">
	<meta name="language" content="Spanish">
	<meta property="og:title" content="Grupo Colore">
	<?php require_once('./app/requires.php'); ?>
	<meta property="og:description" content="Empresa mexicana dedicada a la venta, distribución, mayoreo y menudeo de componentes de accesorios, chapa, aplicaciones, microsetting para armar.">
	<meta property="og:image" content="http://coloreaccesorios.com/colore/img/preview.jpg">
	<meta property="og:url" content="http://coloreaccesorios.com/colore/index.php">
	<!--  Non-Essential, But Recommended -->
	<meta property="og:site_name" content="Grupo Colore">
	<!--  Non-Essential, But Required for Analytics -->
	<link rel="icon" href="<?php echo colore_main;?>favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type='text/css' href="<?php echo colore_css;?>css/bootstrap.min.css">
	<link rel="stylesheet" type='text/css' href="<?php echo colore_css;?>style.css">
	<link rel="stylesheet" type='text/css' href="<?php echo colore_css;?>style.php">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KTT2JWC');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136643830-1"></script>
	<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-136643830-1');
	</script>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTT2JWC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
		    FB.init({
		      appId            : '2244238399170289',
		      autoLogAppEvents : true,
		      xfbml            : true,
		      version          : 'v3.2'
		    });
		};
	</script>
	<?php 
		require_once( './app/colore_cn.php' ); 
		$sql = new Conn();
	?>
<div class="container-fluid p-0">
	<header id="head-colore" class="position-fixed container-fluid m-0 bg-color-primary">
		<nav class="container navbar navbar-expand-lg">
			<a class="navbar-brand" href="index.php">
				<img src="./img/logo.svg" alt="">
			</a>
			<button id="menu-colore" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <i class="fas fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav mr-auto text-right ">
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="accesorios.php">accesorios</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="acero.php">acero</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="chapa.php">chapa</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="aplicaciones.php">aplicaciones</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="microsetting.php">microsetting</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="stores.php">sucursales</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="workshops.php">Talleres</a>
				    </li> 
			    </ul>

			    <ul class="navbar-nav d-none d-sm-none d-md-none d-lg-flex">
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="https://www.facebook.com/ColoreAcero/"><i class="fab fa-facebook-f"></i></a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link text-white text-uppercase" href="https://www.instagram.com/coloremx/?hl=es-la"><i class="fab fa-instagram"></i></a>
				   	</li>
			    </ul>
			</div>
		</nav>
	</header>
