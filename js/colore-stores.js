var city_select = document.getElementById('select-city');
var line_select = document.getElementById("select-line");
var insert = document.getElementById('directory');

function colore_city(){
	// Compara si esta habilitado el select de lineas de producto
	if( line_select.disabled == true ){
		line_select.removeAttribute("disabled");
			if( city_select.options[city_select.selectedIndex].value == 1){
				line_select[1].disabled = false;
				line_select[2].disabled = false;
				line_select[3].disabled = false;
				line_select[4].disabled = false;
				line_select[5].disabled = false;
				colore_line();
			}
			if( city_select.options[city_select.selectedIndex].value == 2){
				line_select[1].disabled = false;
				line_select[2].disabled = false;
				line_select[3].disabled = false;
				line_select[4].disabled = true;
				line_select[5].disabled = true;
				colore_line();
			}
			if( city_select.options[city_select.selectedIndex].value == 3){
				line_select[1].disabled = false;
				line_select[2].disabled = false;
				line_select[3].disabled = false;
				line_select[4].disabled = true;
				line_select[5].disabled = true;
				colore_line();
			}
			if( city_select.options[city_select.selectedIndex].value == 4){
				line_select[1].disabled = true;
				line_select[2].disabled = false;
				line_select[3].disabled = true;
				line_select[4].disabled = true;
				line_select[5].disabled = true;
				colore_line();
			}
			if( city_select.options[city_select.selectedIndex].value == 5){
				line_select[1].disabled = true;
				line_select[2].disabled = false;
				line_select[3].disabled = true;
				line_select[4].disabled = true;
				line_select[5].disabled = true;
				colore_line();
			}
	}
	else{
		colore_line();
	}
	// Compara si esta habilitado el select de lineas de producto
}

function colore_line(){

	if( line_select.options[line_select.selectedIndex].value != 0 ){
		
		get_city = city_select.options[city_select.selectedIndex].value;
		get_line = line_select.options[line_select.selectedIndex].value;

		// Comparaciones para saber que cidad
		if(	get_city == 1 ){ 
			line_select[1].disabled = false;
			line_select[2].disabled = false;
			line_select[3].disabled = false;
			line_select[4].disabled = false;
			line_select[5].disabled = false;
			gdl( get_city , get_line );
		} // Si es Gdl mando llamar la funcion de Gdl
		if(	get_city == 2 ){
			line_select[1].disabled = false;
			line_select[2].disabled = false;
			line_select[3].disabled = false;
			line_select[4].disabled = true;
			line_select[5].disabled = true;
			cdmx( get_city , get_line );
		} // Si es Gdl mando llamar la funcion de Gdl
		if(	get_city == 3 ){ 
			line_select[1].disabled = false;
			line_select[2].disabled = false;
			line_select[3].disabled = false;
			line_select[4].disabled = true;
			line_select[5].disabled = true;
			gto( get_city , get_line ) 
		} // Si es Gdl mando llamar la funcion de Gdl
		if(	get_city == 4 ){
			line_select[1].disabled = true;
			line_select[2].disabled = false;
			line_select[3].disabled = true;
			line_select[4].disabled = true;
			line_select[5].disabled = true;
			sonora( get_city , get_line )
		} // Si es Gdl mando llamar la funcion de Gdl
		if(	get_city == 5 ){
			line_select[1].disabled = true;
			line_select[2].disabled = false;
			line_select[3].disabled = true;
			line_select[4].disabled = true;
			line_select[5].disabled = true;
			aguas( get_city , get_line )
		} // Si es Gdl mando llamar la funcion de Gdl
	}
	else{
		//alert('Seleciona un alinea de producto');
	}

}

function gdl( city_var , line_var ){
	insert.innerHTML = "";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "directorio.xml", true);
	xmlhttp.send();
	// Si es Accesorios y es de GDL
	xmlhttp.onreadystatechange = function() {
	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    		var xmlDoc = xmlhttp.responseXML;
 			var i = 0;
    		var count = xmlDoc.getElementsByTagName("sucursal");
			var city = xmlDoc.getElementsByTagName("city");
			var line = xmlDoc.getElementsByTagName("line");
			var name = xmlDoc.getElementsByTagName("title");
			var dir = xmlDoc.getElementsByTagName("dir");
			var tel = xmlDoc.getElementsByTagName("tel");

			if(line_var == 1 ){// Si es Accesorios
				//alert('Soy Accesorios de GDl');
				while ( i < count.length ) {
					
						if ( city[i].childNodes[0].nodeValue === city_var && line[i].childNodes[0].nodeValue === line_var ){
			  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
			  										'<div class="card">'+
					  									'<div class="card-body">'+
						  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
						  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
							      						'</div>'+
							      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
							      					'</div>'+
						      					'</div>';  
					  	}

					  	if ( city[i].childNodes[0].nodeValue === city_var && parseInt(line[i].childNodes[0].nodeValue ) === 6 ){

		  					insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
		  										'<div class="card">'+
				  									'<div class="card-body">'+
					  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
					  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
					  									'<h3 class="card-title text-left">Modarma</h3>'+
						      						'</div>'+
						      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
						      					'</div>'+
					      					'</div>';  
			  			}
					i++;
				}/* Final While*/
			
			}

			if( line_var == 2 ){// Si es Acero
				//alert('Soy Acero de GDl');
				while ( i < count.length ) {
						if ( city[i].childNodes[0].nodeValue == city_var && line[i].childNodes[0].nodeValue == line_var ){
			  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
			  										'<div class="card">'+
					  									'<div class="card-body">'+
						  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
						  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
							      							
							      						'</div>'+
							      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
							      					'</div>'+
						      					'</div>';  
					  	}
					  	if ( name[i].childNodes[0].nodeValue == 'Galeana #31' && city[i].childNodes[0].nodeValue == city_var ){
		  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
		  										'<div class="card">'+
				  									'<div class="card-body">'+
					  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
					  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
						      							
						      						'</div>'+
						      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
						      					'</div>'+
					      					'</div>';  
			  			}
			  			if ( name[i].childNodes[0].nodeValue == 'Álvaro Obregón #106' && city[i].childNodes[0].nodeValue == city_var ){
		  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
		  										'<div class="card">'+
				  									'<div class="card-body">'+
					  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
					  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
						      							
						      						'</div>'+
						      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
						      					'</div>'+
					      					'</div>';  
			  			}
					i++;
				}/* Final While*/
			
			}
			if( line_var == 3 ){// Si es Chapa
				//alert('Soy Chapa de GDl');
				while ( i < count.length ) {
						if ( city[i].childNodes[0].nodeValue == city_var && line[i].childNodes[0].nodeValue == line_var ){
			  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
			  										'<div class="card">'+
					  									'<div class="card-body">'+
						  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
						  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
							      							
							      						'</div>'+
							      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
							      					'</div>'+
						      					'</div>';  
					  	}
					  	if ( name[i].childNodes[0].nodeValue == 'Galeana #31' && city[i].childNodes[0].nodeValue == city_var ){
		  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
		  										'<div class="card">'+
				  									'<div class="card-body">'+
					  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
					  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
						      							
						      						'</div>'+
						      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
						      					'</div>'+
					      					'</div>';  
			  			}
			  			if ( name[i].childNodes[0].nodeValue == 'Álvaro Obregón #106' && city[i].childNodes[0].nodeValue == city_var ){
		  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
		  										'<div class="card">'+
				  									'<div class="card-body">'+
					  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
					  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
						      							
						      						'</div>'+
						      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
						      					'</div>'+
					      					'</div>';  
			  			}
			  			if (line[i].childNodes[0].nodeValue == 'Modarma' && city[i].childNodes[0].nodeValue == city_var ){
		  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
		  										'<div class="card">'+
				  									'<div class="card-body">'+
					  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
					  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
					  									'<h3 class="card-title text-left">Modarma</h3>'+
						      						
						      						'</div>'+
						      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
						      					'</div>'+
					      					'</div>';  
			  			}
					i++;
				}/* Final While*/
				
			}
			if( line_var == 4 ){// Si es Aplicaciones
					while ( i < count.length ) {
						if ( city[i].childNodes[0].nodeValue == city_var && line[i].childNodes[0].nodeValue == line_var ){
			  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
			  										'<div class="card">'+
					  									'<div class="card-body">'+
						  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
						  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
							      							
							      						'</div>'+
							      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
							      					'</div>'+
						      					'</div>';  
					  	}
					i++;
				}/* Final While*/
			}
			if( line_var == 5 ){// Si es Microsetting
					while ( i < count.length ) {
						if ( city[i].childNodes[0].nodeValue == city_var && line[i].childNodes[0].nodeValue == line_var ){
			  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
			  										'<div class="card">'+
					  									'<div class="card-body">'+
						  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
						  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
							      							
							      						'</div>'+
							      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
							      					'</div>'+
						      					'</div>';  
					  	}
					i++;
				}/* Final While*/
			}	
		} /* Final If */
		fade_stores();
  	};	
}

function cdmx( city_var , line_var ){
	insert.innerHTML = "";
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "directorio.xml", true);
		xmlhttp.send();
		// Si es Accesorios y es de GDL
		xmlhttp.onreadystatechange = function() {
    	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	    		var xmlDoc = xmlhttp.responseXML;
	 			var i = 0;
	    		var count = xmlDoc.getElementsByTagName("sucursal");
				var city = xmlDoc.getElementsByTagName("city");
				var line = xmlDoc.getElementsByTagName("line");
				var name = xmlDoc.getElementsByTagName("title");
				var dir = xmlDoc.getElementsByTagName("dir");
				var tel = xmlDoc.getElementsByTagName("tel");
				if( line_var != 4 && line_var != 5 ){
					while ( i < count.length ) {
							if ( city[i].childNodes[0].nodeValue == city_var){
				  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
				  										'<div class="card">'+
						  									'<div class="card-body">'+
							  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
							  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
								      							
								      						'</div>'+
								      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
								      					'</div>'+
							      					'</div>';  
						  	}
					i++;
					}/* Final While*/	
				}
			} /* Final If */
			fade_stores();
	  	};
	
}
function gto( city_var , line_var ){
	insert.innerHTML = "";
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "directorio.xml", true);
		xmlhttp.send();
		// Si es Accesorios y es de GDL
		xmlhttp.onreadystatechange = function() {
    	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	    		var xmlDoc = xmlhttp.responseXML;
	 			var i = 0;
	    		var count = xmlDoc.getElementsByTagName("sucursal");
				var city = xmlDoc.getElementsByTagName("city");
				var line = xmlDoc.getElementsByTagName("line");
				var name = xmlDoc.getElementsByTagName("title");
				var dir = xmlDoc.getElementsByTagName("dir");
				var tel = xmlDoc.getElementsByTagName("tel");


				
				while ( i < count.length ) {
					if( line_var != 3 && line_var != 4 && line_var != 5 ){
						if ( city[i].childNodes[0].nodeValue == city_var && line[i].childNodes[0].nodeValue == line_var){
			  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
			  										'<div class="card">'+
					  									'<div class="card-body">'+
						  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
						  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
							      							
							      						'</div>'+
							      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
							      					'</div>'+
						      					'</div>';  
					  	}
					  	if( line_var == 2){
					  		if ( city[i].childNodes[0].nodeValue == city_var && name[i].childNodes[0].nodeValue == 'Calle 20 de Enero #141'){
			  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
			  										'<div class="card">'+
					  									'<div class="card-body">'+
						  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
						  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
							      							
							      						'</div>'+
							      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
							      					'</div>'+
						      					'</div>';  
					  		}
					  	}

				
					}
					if( line_var == 3){
						if ( city[i].childNodes[0].nodeValue == city_var && name[i].childNodes[0].nodeValue == 'Calle 20 de Enero #141' ){
			  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
			  										'<div class="card">'+
					  									'<div class="card-body">'+
						  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
						  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
							      							
							      						'</div>'+
							      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
							      					'</div>'+
						      					'</div>';  
					  	}
					}
					i++;
				}/* Final While*/	
				
					
					
			} /* Final If */
			fade_stores();
	  	};

}
function sonora( city_var , line_var ){
	insert.innerHTML = "";
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "directorio.xml", true);
		xmlhttp.send();
		// Si es Accesorios y es de GDL
		xmlhttp.onreadystatechange = function() {
    	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	    		var xmlDoc = xmlhttp.responseXML;
	 			var i = 0;
	    		var count = xmlDoc.getElementsByTagName("sucursal");
				var city = xmlDoc.getElementsByTagName("city");
				var line = xmlDoc.getElementsByTagName("line");
				var name = xmlDoc.getElementsByTagName("title");
				var dir = xmlDoc.getElementsByTagName("dir");
				var tel = xmlDoc.getElementsByTagName("tel");
				
					while ( i < count.length ) {
							if ( city[i].childNodes[0].nodeValue == city_var && line[i].childNodes[0].nodeValue == line_var){
				  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
				  										'<div class="card">'+
						  									'<div class="card-body">'+
							  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
							  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
								      						'</div>'+
								      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
								      					'</div>'+
							      					'</div>';  
						  	}
					i++;
					}/* Final While*/	
					
			} /* Final If */
			fade_stores();
	  	};

}
function aguas( city_var , line_var ){
	insert.innerHTML = "";
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "directorio.xml", true);
		xmlhttp.send();
		// Si es Accesorios y es de GDL
		xmlhttp.onreadystatechange = function() {
    	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	    		var xmlDoc = xmlhttp.responseXML;
	 			var i = 0;
	    		var count = xmlDoc.getElementsByTagName("sucursal");
				var city = xmlDoc.getElementsByTagName("city");
				var line = xmlDoc.getElementsByTagName("line");
				var name = xmlDoc.getElementsByTagName("title");
				var dir = xmlDoc.getElementsByTagName("dir");
				var tel = xmlDoc.getElementsByTagName("tel");
				
					while ( i < count.length ) {
							if ( city[i].childNodes[0].nodeValue == city_var && line[i].childNodes[0].nodeValue == line_var){
				  				insert.innerHTML += '<div class="col-sm-12 col-md-4 col-lg-4 mb-5">'+
				  										'<div class="card">'+
						  									'<div class="card-body">'+
							  									'<h3 class="card-title text-left"><i class="far fa-building pr-3"></i>' + name[i].childNodes[0].nodeValue + '</h3>'+
							  									'<p class="card-text text-left text-primary-colore">' + dir[i].childNodes[0].nodeValue + '</p>'+
								      						'</div>'+
								      							'<a href="tel:+52' + tel[i].childNodes[0].nodeValue + ' " class="card-text p-1 text-left d-block bg-color-primary text-white"><i class="fas fa-phone px-3"></i>' + tel[i].childNodes[0].nodeValue + '</a>'+
								      					'</div>'+
							      					'</div>';  
						  	}
					i++;
					}/* Final While*/	
					
			} /* Final If */
	  	};

}

function fade_stores() {
	var card_fade = document.querySelectorAll('.card');
	var derectory = document.getElementById('directory');
	directory.parentNode.parentNode.classList.add('my-5');
	anime({
	  targets: card_fade,
	  opacity: 1,
	  translateY: [1600 , 0],
	  delay: anime.stagger(60),
	  easing: 'easeInSine',
	  duration: 60,
	});
}