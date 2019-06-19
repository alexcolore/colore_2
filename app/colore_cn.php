<?php 
class Conn{
//Web
// $usuario = 'coloreaccesorios';
// $contrasena = 'sWJ466rzsbjwjsL5r7cy';
// $servidor = 'localhost';
// $basededatos = 'coloreac_suscriptores';
private $servidor = 'localhost';
private $usuario = 'root';
private $contrasena = '';
private $basededatos = 'colore';
private $cn;

	public function ConnBD(){
		$cn = mysqli_connect( $this->servidor , $this->usuario , $this->contrasena );
		$db = mysqli_select_db( $cn , $this->basededatos );	
		if($cn && $db){
			return $cn;
		}
	}

	public function	ConsultaBD( $get_query ){

		$query = $get_query;
		try {

			$response = mysqli_query( $this->ConnBD() , $query ) or die ( mysqli_error( $this->ConnBD() ) );
		} catch (Exception $e) {
			$response = false;
		}
		return $response;
		mysqli_close( $this->ConnBD() );
		/*$query = $get_query;
		if ( $response = mysqli_query( $this->ConnBD() , $query ) or die( mysqli_error($this->ConnBD()) ) ) {
		 	return $response;
		}*/
	}

	public function	InsertBD( $get_query ){

		$query = $get_query;
		if ( $response = mysqli_query( $this->ConnBD() , $query ) or die (mysqli_error(  $this->ConnBD() ) ) ) {
		 	return	true;
		} 
	}

	public function	 ConsultaMailing( $get_query ){

		$query = $get_query;

		if ( $response = mysqli_query( $this->ConnBD() , $query ) or die(mysqli_error()) ) {
		 	return $response;
		} 
		mysqli_close( $this->ConnBD() );
	}//END FUNCTION CONSULTABD
}

?>
