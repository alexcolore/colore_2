<div class="row m-0 overflow-hidden mb-5 mb-sm-5 mb-md-0 mb-lg-0">
	<div class="container" >
		<div class="col-12 col-sm-12 col-md-12 text-center p-0 mx-auto my-5">
			<div id="form-container" class="my-5">
				<form id="form-colore" class="overflow-hidden">
					<h2 class="text-uppercase text-primary-colore title-style letter-space monopoly-bold suscribe-title">Suscríbete</h2>
					<p class="mb-3 text-uppercase text-center suscribe-sub-title">Recibe todas nuestras novedades</p>
					<div class="form-row justify-content-center">
						<div class="w-100"></div>
							<div class="col-12 col-sm-12 col-md-8 col-lg-8 text-left">
								<label for="name" class="form-labe text-primary-colore m-0 suscribe-1">Nombre</label>
								<input id="name" name="name" class="text-black input-suscribe email form-control suscribe-1" type="text" placeholder="¿Como te llamas?" onfocusout="validate_focusout(event);">
							</div>
						<div class="w-100"></div>
						<div id="form-error-name" class="col-12 col-sm-12 col-md-8 col-lg-8 text-left"></div>
						<div class="w-100"></div>
							<div class="col-12 col-sm-12 col-md-8 col-lg-8 text-left">
								<label for="name" class="form-label text-primary-colore m-0 suscribe-2">Apellido</label>
								<input id="lastname" name="lastname" class="text-black input-suscribe email form-control suscribe-2" type="text" placeholder="¿Cual es tu apellido?" onfocusout="validate_focusout(event);">
							</div>
						<div class="w-100"></div>
						<div id="form-error-lastname" class="col-12 col-sm-12 col-md-8 col-lg-8 text-left"></div>
						<div class="w-100"></div>
							<div class="col-12 col-sm-12 col-md-8 col-lg-8 text-left">
								<label for="name" class="form-label text-primary-colore m-0 suscribe-3">Correo</label>
	    						<input id="email" name="email" class="text-black input-suscribe email form-control suscribe-3" type="email" placeholder="example@example.com" onfocusout="validate_focusout(event);">
							</div>
						<div class="w-100"></div>
						<div id="form-error-mail" class="col-12 col-sm-12 col-md-8 col-lg-8 text-left"></div>
						<div class="w-100"></div>
							<div class="col-12 col-sm-12 col-md-4 col-lg-4 justify-content-center mt-3">
								<input id="colore-suscribe" name="subscríbete" type="submit" value="Subscribete" class="button btn btn-outline-secondary text-white suscribe-4" onclick="suscribe_form(event)">
							</div>
						<div class="w-100"></div>
					</div>
				</form>
			</div>
			
			<div id="form-response"></div>
		</div>
	</div>
</div>
