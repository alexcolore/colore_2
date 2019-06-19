<?php require_once 'header.php'; ?>

<div class="row text-center m-0 bg-color-primary" style="height: 100vh">
	<div class="container overflow-hidden d-flex align-items-center">
		<div id="maps-container" class="row justify-content-center align-items-center m-0 my-5 align-content-center">
			<div class="col-12 my-5">
				<div class="row align-items-center align-self-center align-items-center">
					<div class="col-12 col-sm-12 col-md-6 text-left">
						<h3 class="h2 text-white suc-1">Encuentra tu sucursal mas cercana</h3>
						<p class="text-white suc-2">somos una gran familia</p>
					</div>
					<div class="col-6 d-none d-sm-none d-md-block suc-3"><img src="./img/assets/tienda.png" class="img-fluid"></div>	
				</div>
			</div>
			<div class="col-12 p-0 mb-2 ">
				<form class="">
					<div class="form-row align-items-center">
						<div class="col-sm-6 col-md-6 col-lg-6 mb-3 suc-4">
							<p class="text-left text-uppercase text-white">1.- Seleciona tu ciudad de interés</p>
							<select id="select-city" class="custom-select" onchange="colore_city()">
								<option value="0" disabled selected>Elija una ciudad</option>
							 	<option value="1">Guadalajara, Jalisco</option>
							 	<option value="2">Cd. de México</option>
							 	<option value="3">León, Guanjuato</option>
							 	<option value="4">Cd. Obregón, Sonora</option>
							 	<option value="5">Aguascalientes, Aguascalientes</option>
							</select>
						</div>

						<div  class="col-sm-6 col-md-6 col-lg-6 mb-3 suc-5">
							<p class="text-left text-uppercase text-white">2.- Selecciona una de nuestras líneas</p>
							<select id="select-line" class="custom-select" disabled onchange="colore_line()">
								<option value="0" disabled selected>Elije la linea de Producto</option>
							 	<option value="1">Accesorios</option>
							 	<option value="2">Acero</option>
							 	<option value="3">Chapa</option>
								<option value="4">Aplicaciones</option>
								<option value="5">Microsetting</option>
							</select>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row m-0">
	<div class="container">
		<div class="row">
			<div class="col-12 p-0">
				<div id="directory" class="row m-0 overflow-hidden justify-content-spacebetween"></div>
			</div>
		</div>
	</div>
</div>

<?php require_once 'footer.php'; ?>
