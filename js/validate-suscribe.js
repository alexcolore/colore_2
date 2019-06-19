var suscribe_op = 0;

var $suscribe_container = $('#form-container');
	$suscribe_container.waypoint(function ( direction ) {
		if(suscribe_op <= 0){
			if(direction == 'down'){
				var suscribe_timeline = anime.timeline({
					 easing: 'easeOutExpo',
		  			duration: 900,
				});
				suscribe_timeline
				.add({
					targets: '.suscribe-title',
					opacity: [0,1],
					translateY: [300 , 0],
				})
				.add({
					targets: '.suscribe-sub-title',
					opacity: [0,1],
					translateY: [300 , 0],
				}, '-=400')
				.add({
					targets: '.suscribe-1',
					opacity: [0,1],
					translateY: [300 , 0],
				}, '-=400')
				.add({
					targets: '.suscribe-2',
					opacity: [0,1],
					translateX: [-600 , 0],	
				}, '-=400')
				.add({
					targets: '.suscribe-3',
					opacity: [0,1],
					translateX: [300 , 0],		
				}, '-=400')
				.add({
					targets: '.suscribe-4',
					opacity: [0,1],
					translateY: [300 , 0],		
				}, '-=400')
		}
		suscribe_op = 1;
	}
}, { offset: '60%' });

/* Form Catch*/
function suscribe_form(e){
	e.preventDefault();
	var form = document.getElementById("form-colore");
	var data_form = new FormData(form);
	var name_validate = validation_name( data_form.get('name') );
	var lastname_validate = validation_lastname( data_form.get('lastname') );
	var email_validate = validation_email( data_form.get('email') );
	var form_h = (form.clientHeight/2)+60;
	
	if ( name_validate == 1 && lastname_validate == 1 && email_validate == 1 ) {
		var xhr =  new XMLHttpRequest();
		xhr.open('POST' , 'form.php');
		xhr.send(data_form);
		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4 && xhr.status == 200) {
				anime({
					targets: form,
					translateX: [0,1920],
					opacity: [1,0],
					duration: 2600,
					easing: 'easeOutExpo',
				});
				document.getElementById('form-response').innerHTML = xhr.responseText + '<a href="" id="return-email">Regresar al formulario</a>' ;
				anime({
					targets: document.getElementById('form-response'),
					translateY: [0 ,'-'+form_h],
					opacity: [0,1],
					duration: 1600,
					easing: 'easeOutExpo',
				});
				form.reset();

				document.getElementById('return-email').addEventListener('click', function(e){

				    e.preventDefault();
				    anime({
						targets: document.getElementById('form-response'),
						translateY: [0,form_h+60],
						opacity: [1,0],
						duration: 1600,
						easing: 'easeOutExpo',
					});
				    anime({
						targets: form,
						opacity: [0,1],
						translateX: [1920,0],
						duration: 1900,
						easing: 'easeOutExpo',
						begin: function	( anim ){
							reset_form(data_form);
						},
						complete: function ( anim ){
							document.getElementById('name').focus();
						}
					});
				});
				
			}
		}
	}	
}

function validation_name( get_name ){

	var reg = /^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/;
	var name = document.getElementById('name');
	var error_name = document.getElementById('form-error-name');
	
	if( get_name === '' ){	
		name.classList.add('is-invalid');
		error_name.innerHTML = "<span class='text-danger'>*Ingresa un nombre valido</span>";
		flag = 0;
	}
	else if ( reg.test( get_name ) === false ) {
		name.classList.add('is-invalid');
		error_name.innerHTML = "<span class='text-danger'>*Ingresa un nombre valido</span>";
		flag = 0;
	}
	else {
		name.classList.remove('is-invalid');
		name.classList.add('is-valid');
		error_name.innerHTML = "";
		flag = 1;
	}
	return flag;

}

function validation_lastname( get_lastname ){

	var reg = /^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/;
	var lastname = document.getElementById('lastname');
	var error_lastname = document.getElementById('form-error-lastname');

	if( get_lastname === '' ){
		lastname.classList.add('is-invalid');
		error_lastname.innerHTML = "<span class='text-danger'>*Ingresa un apellido valido</span>";
		flag = 0;
	}
	else if ( reg.test( get_lastname ) === false ) {
		lastname.classList.add('is-invalid');
		error_lastname.innerHTML = "<span class='text-danger'>*Ingresa un apellido valido</span>";
		flag = 0;
	}
	else {
		lastname.classList.remove('is-invalid');
		lastname.classList.add('is-valid');
		error_lastname.innerHTML = "";
		flag = 1	
	}
	return flag;

}

function validation_email( get_email ){

	var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var email = document.getElementById('email');
	var error_email = document.getElementById('form-error-mail');
	if( get_email == '' ){
		email.classList.add('is-invalid');
		error_email.innerHTML = "<span class='text-danger'>*Ingresa un mail valido</span>";
		flag = 0;
	}
	else if ( reg.test( get_email ) == false ) {
		email.classList.add('is-invalid');
		error_email.innerHTML = "<span class='text-danger'>*Ingresa un mail valido</span>";
		flag = 0;
	}
	else {
		email.classList.remove('is-invalid');
		email.classList.add('is-valid');
		error_email.innerHTML = "";
		flag = 1
	}
	return flag;

}

function validate_focusout(e){
	
	if( e.target.name == 'name' && e.target.value.length > 0){
		validation_name(e.target.value);
	}
	else if( e.target.name == 'lastname' && e.target.value.length > 0){
		validation_lastname(e.target.value);
	}
	else if( e.target.name == 'email' && e.target.value.length > 0){
		validation_email(e.target.value);
	}
}

function reset_form( data_form_reset ){

	name_reset = document.getElementById('name');
	name_reset.classList.remove('is-valid');

	lastname_reset = document.getElementById('lastname');
	lastname_reset.classList.remove('is-valid');

	email_reset = document.getElementById('email');
	email_reset.classList.remove('is-valid');

}