<?php 
ob_start ("ob_gzhandler");
header("Content-type: text/css; charset: UTF-8");
header("Cache-Control: must-revalidate");
$offset = 60 * 60 ;
$ExpStr = "Expires: " .
gmdate("D, d M Y H:i:s",
time() + $offset) . " GMT";
header($ExpStr);

$i = 1;
require_once( './app/colore_cn.php' ); 
$sql = new Conn();
$res = $sql -> ConsultaBD( "SELECT * FROM slider_dp" );
while(  $row = mysqli_fetch_array($res) ){
	?>
	.slider-img-<?php echo $i ?>{
    	height: 65vh;
    	background-image: url(" <?php echo $row['img_slider']; ?> ");
    	background-attachment: fixed;
   		background-position: top center;
    	background-repeat: no-repeat;
    	background-size: 1920px 700px;
	}
	<?php 
		$i++; 
}
?>

/* Extra small devices (phones, 600px and down) */
@media (max-width: 450px) {
<?php 
$i = 1;
$res = $sql -> ConsultaBD( "SELECT * FROM slider_ml" );
while(  $row = mysqli_fetch_array($res) ){
	?>
	.slider-img-<?php echo $i ?>{
    	height: 100vh !important;
	    background-image: url(" <?php echo $row['img_slider']; ?> ") !important;
	    background-attachment: fixed;
	    background-position: center top;
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	<?php 
		$i++; 
	}
	?>
} 

@media (max-width: 575px) {
/* Slider Queries */
<?php 
$i = 1;
$res = $sql -> ConsultaBD( "SELECT * FROM slider_ml" );
while(  $row = mysqli_fetch_array($res) ){
	?>
	.slider-img-<?php echo $i ?>{
    	height: 100vh !important;
	    background-image: url(" <?php echo $row['img_slider']; ?> ") !important;
	    background-attachment: scroll;
	    background-position: center top;
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	<?php 
		$i++; 
	}
	?>
} 