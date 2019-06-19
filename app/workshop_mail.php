<?php
date_default_timezone_set('America/Mexico_City');
$to = $_POST['email_workshop'];
$from = "info@coloreaccesorios.com";
$headers = "From: " . $from;
$subject = "¡Bienvenido a Grupo Colore!";
$headers .= "MIME-Version: Grupo Colore\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = include_once 'message.php';


$name = $_POST['name_workshop'];
$lastname = $_POST['lastname_workshop'];
$email = $_POST['email_workshop'];
$comments = $_POST['comments_workshop'];

$date_start = date('d/m/Y === H:i:s');
$date_end = date( 'd/m/Y === H:i:s' , strtotime('+ 1 days' ) );
$so = $_SERVER['HTTP_USER_AGENT'];
$ip  =  $_SERVER['REMOTE_ADDR'];

require_once( 'colore_cn.php' );
$sql = new Conn();

$res = $sql -> ConsultaBD( " SELECT email_ws FROM workshops WHERE email_ws = '$email' " );


if ( $row = mysqli_fetch_array( $res ) ) {
  echo '<div class="row text-center">'.
       '<div class="col-12"><h1 class="text-uppercase text-primary-colore title-style letter-space monopoly-bold">¡Lo sentimos!</h1></div>'.
       '<div class="col-12"><h4 class="mb-3 text-uppercase text-center">Este email ya está dado de alta:</h4></div>'.
       '<div class="col-12"><p class="text-center">'. $email .'</p></div>'.
      '</div>';

}

else{
  $sql->ConsultaBD( "INSERT INTO workshops ( id , name_ws , lname_ws , email_ws , phone_ws , com_ws , dates_ws , datee_ws , city_ws , source_ws , status_ws , title_ws ) VALUES ( NULL , '$name' , '$lastname' , '$email' , '354-106-18-51' , '$comments' , '$date_start' ,  '$date_end' , 'GDL' , 'Web' , 'Red' , 'Taller de Armado' ) " );  

    echo "Insert Listo";
}



?>
 

