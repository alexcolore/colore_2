<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Colore Accesorios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="Grupo Colore">
	<link rel="icon" href="../favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link rel="stylesheet" href="../css/table.css">
</head>
<body>

<?php 
// Get Form Data
	$usr = $_POST['usr'];
	$_SESSION['user'] = $usr;
	if (isset($_SESSION['user'])) {
		
		require_once( 'colore_cn.php' );
		$sql = new Conn();
		$pwd = $_POST['pwd'];
		if( $sql -> ConsultaBD( "SELECT * FROM access WHERE user = '$usr' AND p_s = '$pwd' " ) ){
			?>
			<div id="mailing-body" class="container-fluid bg-color-primary">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 text-center">
							<h2 class="text-white my-5"><img src="../img/logo.svg" alt="logo" style="width: 180px;"></h2>
						</div>
						<div class="col-3">
							<h3 class="text-white mt-5 pt-5">Campañas</h3>
							<ul class="pl-3">
								<li>
									<li><a href="">Tendencias 05-06-19</a></li>
									<li><a href="">Descuentos 05-06-19</a></li>
								</li>
							</ul>
						</div>
						<div class="col-9">
							<table id="myTable" class="table">
							  	<thead class="thead-light">
							    	<tr>
							    		<th scope="col" clas="text-white">#</th>
							    		<th scope="col" clas="text-white">Nombre</th>
							    		<th scope="col" clas="text-white">Apellido</th>
							    		<th scope="col" clas="text-white">Mail</th>
							    		<th scope="col" clas="text-white text-center">
							    			<input id="selected-all" type="checkbox" class="radio_m" onclick="radio_all(event);" value="0">
							    		</th>
							    	</tr>
							 	</thead>
							   	<tbody>
									<?php 
										$res = $sql -> ConsultaMailing( "SELECT * FROM suscriptores" );
										$i = 1;
										while( $row = mysqli_fetch_array( $res ) ){ 
									    echo  '<tr>'.
									    		'<td class="text-white">' . $i++ . '</th>'.
									    		'<td class="text-white">' . ucwords( mb_strtolower ( $row['nombre'] )) . '</td>'.
									    		'<td class="text-white">' . ucwords( mb_strtolower ( $row['apellido'] ))  . '</td>'.
									    		'<td class="text-white">' . strtolower ($row['email'] ) . '</td>'.
									    		'<td class="text-center"><input type="checkbox" class="text-center radio" value="0" onclick="radios_function(event)"></td>'.
									    	  '</tr>';	  
										}
									?>
								</tbody>
							</table>
							<form id="form-mailing" action="mailing_1.php" method="POST">
								<input type="submit" value="ENVIAR" class="btn-mail" onclick="send_mail(event)">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 py-5">
						<div style="height: 90px;"></div>
					</div>
				</div>
			</div>
			<?php 
		}
	}
	else {
	   echo "Sin info";
	}
?>

<div id="response_mail" class="mb-5"></div>
<div id="error_mail" class="mb-5 container text-white"></div>

<script src="../js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script src="../js/anime.min.js"></script>
<script>
$( document ).ready( function(){
 	$('#myTable').DataTable({
		"oLanguage":{
			"sLengthMenu": "<span class='data-inputs-text'>Entradas para mostrar _MENU_ </span>",
			"sSearch": "<span class='data-inputs-text'>Buscador</span>",
			"sZeroRecords": "No hay registros relacionados con tu busqueda",
			"sInfo": "<p id='info'>Mostrados _START_ to _END_ of _TOTAL_ registros</p>",
		},
	    "columns": [ {"sortable": true},{"sortable": true},{"sortable": true},{"sortable": true},{"sortable": false}],
	});
 });
</script>
<script>
	/* Checked / Unchecked Radio One */
	function radios_function(e){
		let table = $('#myTable').DataTable();
		//let data = table.rows(e.target.parentNode).data();
		let data = table.rows().data();
		let update_cell;
		if( e.target.getAttribute('value') == 1 ){
			e.target.removeAttribute('checked');
			e.target.setAttribute( 'value' , 0 );
			update_cell	= e.target.outerHTML;
		}
		else if( e.target.getAttribute('value') == 0 ){
			e.target.setAttribute('checked', true);
			e.target.setAttribute( 'value' , 1 );
			update_cell	= e.target.outerHTML;
		}
		table.cell(e.target.parentNode).data(update_cell).draw('full-hold');;
	}
	/* Checked All / Unchecked */
	function radio_all(e){
		let table = $('#myTable').DataTable();
		let data = table.rows().data();
		let data_str;
		let catch_inputs = document.createElement( 'div' );
		let name,ap,mail,get_inputs;

		if( e.target.getAttribute('value') == 1 ){
			e.target.removeAttribute('checked');
			e.target.setAttribute( 'value' , 0 );
			for (var i = 0; i < data.length; i++) {
				//name = data[i][1];
				//ap = data[i][2];
				//mail = data[i][3];
				catch_inputs.innerHTML = data[i][4];
				get_inputs = catch_inputs.querySelector('.radio');
				get_inputs.setAttribute('value', 0);
				get_inputs.removeAttribute('checked');
				//table.row(i).data( {'0': i+1, '1': name, '2': ap, '3': mail, '4': get_inputs.outerHTML } ).draw('full-hold');
				table.cell( i , 4 ).data( get_inputs.outerHTML  ).draw('full-hold'); 
			}
		}
		else if( e.target.getAttribute('value') == 0 ){
			e.target.setAttribute('checked', true);
			e.target.setAttribute( 'value' , 1 );
			for (var i = 0; i < data.length; i++) {
				//name = data[i][1];
				//ap = data[i][2];
				//mail = data[i][3];
				catch_inputs.innerHTML = data[i][4];
				get_inputs = catch_inputs.querySelector('.radio');
				get_inputs.setAttribute('value', 1);
				get_inputs.setAttribute('checked', true);
				//table.row(i).data( {'0': i+1, '1': name, '2': ap, '3': mail, '4': get_inputs.outerHTML } ).draw('full-hold');	
				table.cell( i , 4 ).data( get_inputs.outerHTML  ).draw('full-hold'); 
			}
		}
	}
	/* Send POST method */
	function send_mail(e){
		e.preventDefault();
		const res = document.getElementById('response_mail');
		res.innerHTML = '';
		const table = $('#myTable').DataTable();
		let data = table.rows().data();
		let name_mailing = [], last_name_mailing = [], mail_mailing = [], checked_mail = [];
		let url = 'mailing_1.php',j = 0;
		let catch_inputs = document.createElement( 'div' ) , get_inputs;

		for (var i = 0; i < data.length; i++) {
			name_mailing[i] = data[i][1];
			last_name_mailing[i] = data[i][2];
			mail_mailing[i] = data[i][3];
			checked_mail[i] = data[i][4];

			catch_inputs.innerHTML = checked_mail[i];
			get_inputs = catch_inputs.querySelector('.radio');

			let xhr =  new XMLHttpRequest();
			xhr.open( 'POST' , url , true );

			if(get_inputs.getAttribute('value') == 1){
				var params = 'count=' + i + '&names=' + name_mailing[i] + '&aps=' + last_name_mailing[i] + '&mails=' + mail_mailing[i] + '';
				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhr.onreadystatechange = function() {
					if ( xhr.readyState == 4 && xhr.status == 200 ) {
						j++;
						anime({
							targets: res,
							opacity: .9,
							duration: 900,
							begin: function(anim){
								res.style.display = 'flex';
								res.innerHTML = '<span id="close-mail" class="text-white"><i class="fas fa-times" onclick="close_mailing(event)"></i></span>' + 
													'<ul>' +
														'<li><h1 id="success-mail" class="text-success text-center"><i class="fas fa-check"></i></h1></li>' +
														'<li><h2 id="total-mail" class="text-white text-center">Total: ' + j + ' Correos enviados</h2></li>' +
													'</ul>';

								document.getElementById('error_mail').innerHTML += xhr.responseText;	
							},
							complete: function(anim){
								anime({
									targets: document.getElementById('success-mail'),
									opacity: [0,1],
									duration: 600,
								});
								anime({
									targets: document.getElementById('total-mail'),
									opacity: [0,1],
									duration: 1200,
								});
							}
						});

						//
					}
				}
				xhr.send( params );
			}
		}
		// https://css-tricks.com/snippets/php/detect-location-by-ip/
	}
	// https://css-tricks.com/snippets/php/detect-location-by-ip/

	function close_mailing(e){
		e.preventDefault();
		const res = document.getElementById('response_mail');
			anime({
				targets: res,
				opacity: 0,
				duration: 900,
				complete: function(anim){
					res.style.display = 'none';
				}
			});
	}
</script>
</body>
</html>
