function suscribe_form_talleres(e){
	e.preventDefault();

	var form = document.getElementById("form-talleres");

	var data_form = new FormData(form);
	var name_workshop_validate = validation_name_workshop( data_form.get('name_workshop') );
	var lastname_workshop_validate = validation_lastname_workshop( data_form.get('lastname_workshop') );
	var email_workshop_validate = validation_email_workshop( data_form.get('email_workshop') );
	var phone_workshop_validate = validation_phone_workshop( data_form.get('phone_workshop') );


	var container_response = document.getElementById('workshop_response');

	var form_h = (form.clientHeight/2);

	if ( name_workshop_validate == 1 && lastname_workshop_validate == 1 && email_workshop_validate == 1 && phone_workshop_validate == 1) {
		var xhr =  new XMLHttpRequest();
		xhr.open('POST' , './app/workshop_mail.php');
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
				document.getElementById('workshop_response').innerHTML = xhr.responseText + '<a href="" id="return-email">Regresar al formulario</a>';
				anime({
					targets: document.getElementById('workshop_response'),
					translateY: [0 ,'-'+form_h],
					opacity: [0,1],
					duration: 1600,
					easing: 'easeOutExpo',
				});
				form.reset();
				document.getElementById('return-email').addEventListener('click', function(e){
				    e.preventDefault();
				    anime({
						targets: document.getElementById('workshop_response'),
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
							//document.getElementById('name').focus();
						}
					});
				});
				
			}
		}
	}
}


function validation_name_workshop( get_name_workshop ){

	var reg = /^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/;
	var name = document.getElementById('name_workshop');
	var error_name = document.getElementById('form-error-name-workshop');
	
	if( get_name_workshop === '' ){	
		name.classList.add('is-invalid');
		error_name.innerHTML = "<span class='text-danger'>*Ingresa un nombre valido</span>";
		flag = 0;
	}
	else if ( reg.test( get_name_workshop ) === false ) {
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

function validation_lastname_workshop( get_lastname_workshop ){

	var reg = /^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/;
	var lastname = document.getElementById('lastname_workshop');
	var error_lastname = document.getElementById('form-error-lastname-workshop');

	if( get_lastname_workshop === '' ){
		lastname.classList.add('is-invalid');
		error_lastname.innerHTML = "<span class='text-danger'>*Ingresa un apellido valido</span>";
		flag = 0;
	}
	else if ( reg.test( get_lastname_workshop ) === false ) {
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

function validation_email_workshop( get_email ){

	var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var email = document.getElementById('email_workshop');
	var error_email = document.getElementById('form-error-mail-workshop');
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
function validation_phone_workshop( get_phone ){

	var reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	var phone = document.getElementById('phone_workshop');
	var error_phone = document.getElementById('form-error-phone-workshop');

	if( get_phone == ''){
		phone.classList.add('is-invalid');
		error_phone.innerHTML = "<span class='text-danger'>*Ingresa un numero de telefono</span>";
		flag = 0;
	}
	else if( get_phone.length < 10 || get_phone.length > 14 ){
		phone.classList.add('is-invalid');
		error_phone.innerHTML = "<span class='text-danger'>*Ingresa un numero de telefono valido a 10 digitos</span>";
		flag = 0;
	}


	else{
		phone.classList.remove('is-invalid');
		phone.classList.add('is-valid');
		error_phone.innerHTML = "";
		flag = 1
	}
	return flag;
}

function validate_focusout_workshop(e){
	if( e.target.name == 'name_workshop' && e.target.value.length > 0){
		validation_name_workshop(e.target.value);
	}
	else if( e.target.name == 'lastname_workshop' && e.target.value.length > 0){
		validation_lastname_workshop(e.target.value);
	}
	else if( e.target.name == 'email_workshop' && e.target.value.length > 0){
		validation_email_workshop(e.target.value);
	}

	else if( e.target.name == 'phone_workshop' && e.target.value.length > 0 ){
		validation_phone_workshop(e.target.value);
	}
}


function reset_form( data_form_reset ){
	name_reset = document.getElementById('name_workshop');
	name_reset.classList.remove('is-valid');

	lastname_reset = document.getElementById('lastname_workshop');
	lastname_reset.classList.remove('is-valid');

	email_reset = document.getElementById('email_workshop');
	email_reset.classList.remove('is-valid');

	phone_reset = document.getElementById('phone_workshop');
	phone_reset.classList.remove('is-valid');
}
