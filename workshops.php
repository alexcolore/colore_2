<?php include_once 'header.php' ?>
<div style="height: 120px;"></div>
<div class="row m-0">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-12 mt-3">
				<div class="d-flex justify-content-center mb-5">
					<img src="<?php echo colore_main;?>img/logos/accesorios.svg" class="text-center" alt="logo_taller" style="width: 130px;">
				</div>
			</div>
			<div class="col-12  justify-content-center">
				<h1 class="uppercase text-center text-primary-colore letter-space">Taller de Armado CDMX</h1>
			</div>
			<div class="col-3 text-center">
				<p class="text-center uppercase bg-color-primary text-white h5 p-1">26 y 27 de Junio 2019</p>
			</div>
		</div>
	</div>
	<div class="container my-5 pt-3">
		<div class="row">
			<div class="col-4">
				<h3 class="color-red text-center display-4"><i class="far fa-clock"></i></h3>
				<p class="text-primary-colore text-center h4">9:30 am. a 1:30 pm.</p>
			</div>
			<div class="col-4">
				<h3 class="color-red text-center display-4"><i class="fas fa-chalkboard-teacher"></i></h3>
				<p class="text-primary-colore text-center h4">Mtra. Patricia Robles</p>
			</div>
			<div class="col-4">
				<h3 class="color-red text-center display-4"><i class="far fa-building"></i></h3>
				<p class="text-primary-colore text-center h4">Venustiano Carranza #47 <br>Col. Centro CDMX</p>
			</div>
		</div>
	</div>
	<div class="container overflow-hidden">
		<div class="row justify-content-center mt-5">
			<div class="col-12">
				<h2 class="color-red text-center uppercase letter-space m-0">Cupo Limitado</h2>
			</div>
			<div class="col-12 d-flex justify-content-center">
				<form id="form-talleres" class="col-sm-12 col-md-6 col-lg-6">
					<h3 class="text-primary-colore text-center uppercase pb-3">Aparta tu lugar</h3>

					<div class="w-100"></div>
					<div class="col-12 col-sm-12 text-left p-0">
						<label for="name_workshop" class="form-labe text-primary-colore m-0">Nombre</label>
						<input type="text" id="name_workshop" name="name_workshop" class="form-control" placeholder="Ingresa tu nombre" onfocusout="validate_focusout_workshop(event);">
					</div>
					<div class="w-100"></div>
						<div id="form-error-name-workshop" class="col-12 col-sm-12 text-left p-0"></div>

					<div class="w-100"></div>
					<div class="col-12 col-sm-12 text-left p-0">
						<label for="lastname_workshop" class="form-labe text-primary-colore m-0">Apellido</label>
						<input type="text" id="lastname_workshop" name="lastname_workshop" class="form-control" placeholder="Apellido" onfocusout="validate_focusout_workshop(event);">
					</div>
					<div class="w-100"></div>
						<div id="form-error-lastname-workshop" class="col-12 col-sm-12 text-left p-0"></div>

					<div class="col-12 col-sm-12 text-left p-0">
						<label for="phone_workshop" class="form-labe text-primary-colore m-0">Phone</label>
						<input type="tel" id="phone_workshop" name="phone_workshop" class="form-control" maxlength="10" placeholder="(33) 2322-6812" onkeydown="validator_number(event)" onfocusout="validate_focusout_workshop(event);">
					</div>
					<div class="w-100"></div>
						<div id="form-error-phone-workshop" class="col-12 col-sm-12 text-left p-0"></div>

					<div class="w-100"></div>
					<div class="col-12 col-sm-12 text-left p-0">
						<label for="email_workshop" class="form-labe text-primary-colore m-0">Email</label>
						<input type="text" id="email_workshop" name="email_workshop" class="form-control" placeholder="example@example.com" onfocusout="validate_focusout_workshop(event);">
					</div>
					<div class="w-100"></div>
						<div id="form-error-mail-workshop" class="col-12 col-sm-12 text-left p-0"></div>

					<div class="w-100"></div>
					<!-- <div class="col-12 col-sm-12 text-left p-0">
						<label for="comments_workshop" class="form-labe text-primary-colore m-0">Comentarios</label>
						<textarea id="comments_workshop" name="comments_workshop" class="form-control" cols="10" placeholder="Agrega tus sugerencias"></textarea>
					</div> 

					<div class="w-100"></div> -->
					<div class="col-12 col-sm-12 text-left p-0">
						<input type="submit" class="btn btn-outline-secondary text-white mt-3" placeholder="example@example.com" onclick="suscribe_form_talleres(event)">
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div id="workshop_response"></div>
		</div>
	</div>

	<div class="container my-5">
		<div class="row my-5">
			<div class="col-12">
				<h2 class="text-primary-colore uppercase text-center letter-space">Experiencias y Aprendizaje</h2>
			</div>
			<div class="col-12 text-center">
				<p class="text-center lead">Aprende tecninas y comparte experiencias</p>
			</div>
			<div class="col-12">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="overflow-hidden"><img src="./img/taller/taller-lg-1.jpg" alt="" class="img-fluid gallery-img" onclick="taller_gallery(event)"></div>
			</div>
			<div class="col-4">
				<div class="overflow-hidden"><img src="./img/taller/taller-lg-2.jpg" alt="" class="img-fluid gallery-img" onclick="taller_gallery(event)"></div>
			</div>
			<div class="col-4">
				<div class="overflow-hidden"><img src="./img/taller/taller-lg-3.jpg" alt="" class="img-fluid gallery-img" onclick="taller_gallery(event)"></div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-4">
				<div class="overflow-hidden"><img src="./img/taller/taller-lg-4.jpg" alt="" class="img-fluid gallery-img" onclick="taller_gallery(event)"></div>
			</div>
			<div class="col-4">
				<div class="overflow-hidden"><img src="./img/taller/taller-lg-5.jpg" alt="" class="img-fluid gallery-img" onclick="taller_gallery(event)"></div>
			</div>
			<div class="col-4">
				<div class="overflow-hidden"><img src="./img/taller/taller-lg-6.jpg" alt="" class="img-fluid gallery-img" onclick="taller_gallery(event)"></div>
			</div>
		</div>
	</div>
</div>

<div id="light-box" class="overflow-hidden m-0">
	<div id="light-box-close">
		<span id="close-light" class="text-white"><i class="fas fa-times" onclick="close_light(event)"></i></span>
	</div>
	<div id="light-box-img">
		
	</div>
	<div id="light-box-bg">
		
	</div>
</div>

<?php include 'socials.php'?>
<script>
	function taller_gallery(e){
		let img_container = document.getElementById('light-box-img');
		let active_light = document.getElementById('light-box');
		let img_new = document.createElement('img');

		let img = e.target.src;
		img_new.src = img;
		active_light.style.display = 'flex';
		img_container.innerHTML = img_new.outerHTML;

	}

	function close_light( e ){
		let active_light = document.getElementById('light-box');
		active_light.style.display = 'none';
		//img_restore.classList.add('gallery-img');
	}
</script>
<?php include 'footer.php'?>