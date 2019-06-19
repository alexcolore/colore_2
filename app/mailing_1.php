<?php 
$count = $_POST['count'];
$to = $_POST['mails'];
$from = "info@coloreaccesorios.com";
$headers = "From: " . $from;
$subject = "¡Tendencias 2019!";
$headers .= "MIME-Version: Grupo Colore\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tendencias 2019</title>
  <style>
    *,*:after,*:before{
      padding: 0;
      margin: 0;
      box-sizing:   border-box; 
    }
    @font-face {
      font-family: "monopoly";
      src: url(https://coloreaccesorios.com/fonts/monopoly_light.ttf) format("ttf");
    }
    body,html{
      font-family: "monopoly";
      margin: 0 auto;

    }
    .container-full{
      width:100%; 
    }
    .container {
      width: 900px;
      max-width: 900px;
      margin: 0 auto;
    }
    .row{
      width:  100%;
    }
    .cell{
      position: relative;
      overflow: hidden;
      width: 50%;
      height: 440px;
      max-height: 450px;
      max-width: 450px;
    }
    .color-primary{
      color: #003da6;
    }
    table{
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      max-width: 900px;
    }
    table,th,td{
      border: none;
    }
    ul{
      margin: 0;
      padding: 30px;
      list-style: none;
    }
    ul>li{
       display: inline-block;
    }
    hr{
      margin: 0 auto;
      width: 70%;
      margin-top: 13px;
    }
    .social{
      width: 25px;
      max-width: 25px;
    }
    .title{
      font-size: 30px;
      color: white;
      letter-spacing: 6px;
      text-align: center;
      margin-bottom: 9px;
    }
    .sub-title{
      color: white;
      letter-spacing: 3px;
      text-align: center;
    }
    .has{
      width: 20px;
    }
    .parrafo{
      color: white;
      padding: 40px;
      font-size: 16px;
    }
    .space{
      display: block;
      width: 90px;
    }
    .container-blue{
      background-color: #003da6;
    }
    .logos{
      width: 180px;
    }
    .img-bloq{
      position: absolute;
      top: 0;
      width: 100%;
      max-width: 450px;
      height: 100%;
    }
    .row-space{
      height: 60px;
    }
  </style>
</head>
  <body>

   <div class="container-full"> 

       <div class="container">
      <table>
        <thead>
          <tr>
            <th colspan="2"><img src="https://coloreaccesorios.com/img/mail/logo_news.png" alt=""></th>
          </tr>
          <tr>
            <th colspan="2">
              <ul>
                <li><a href="https://www.facebook.com/AccesoriosColore/"><img src="https://coloreaccesorios.com/img/mail/facebook.png" alt="" class="social"><p class="color-primary">Accesorios</p></a><span class="space"></span></li>
                <li><a href="https://es-la.facebook.com/ColoreAcero/"><img src="https://coloreaccesorios.com/img/mail/facebook.png" alt="" class="social"><p class="color-primary">Acero</p></a><span class="space"></span></li>
                <li><a href="https://www.instagram.com/coloremx/?hl=es-la"><img src="https://coloreaccesorios.com/img/mail/instagram.png" alt="" class="social"><p class="color-primary">Colore Mx</p></a><span class="space"></li>
              </ul>
            </th>
          </tr>
          <tr class="row-space"></tr>
        </thead>

        <tbody>
          <tr class="row">
            <td class="cell"><img src="https://coloreaccesorios.com/img/mail/img_mail_1.jpg" alt="" class="img-bloq"></td>
            <td class="cell container-blue">
              <h2 class="title">TENDENCIAS</h2>
              <h5 class="sub-title">PRIMAVERA - VERANO 2019</h5>
              <hr>
              <h5 class="parrafo">El mundo de la moda se ha rendido a los siete colores del arcoíris, súbete a esta colorida tendencia de primavera.<br><br>
                Se comenzarán a utilizar piezas multicolor o también conocida como tendencia arcoíris.<br><br>
                Combina cristales de diferentes colores en todos tus diseños.<br><br>
                Utilízalo en anillos, dijes, aretes, collares y brazaletes.
              </h5>
            </td>
          </tr>
          <tr class="row-space"></tr>
          <tr class="row">
            <td class="cell container-blue">
              <h2 class="title"><img src="https://coloreaccesorios.com/img/mail/microsetting.png" alt="" class="logos"></h2>
              <h5 class="parrafo">
                Conoce nuestra línea Colore Microsetting
                <br><br>
                Joyería terminada y componentes para armar con múltiples Zirconias diminutas, montadas muy juntas para lograr una superficie uniforme y atractiva.
                <br><br>
                ¡Ven y descubre la gran variedad de diseños que tenemos para ti!
              </h5>
            </td>
            <td class="cell "><img src="https://coloreaccesorios.com/img/mail/img_mail_2.jpg" alt="" class="img-bloq"></td>
          </tr>
          <tr class="row-space"></tr>
          <tr class="row">
            <td class="cell container-blue">
              <h2 class="title">LABOR SOCIAL</h2>
              <hr>
              <h5 class="parrafo"> “En un momento en el que el mundo necesita más que nunca creer en que hay algo que puede detener la violencia y contener la bondad, encontrarnos con la sonrisa de un niño nos envuelve en un halo de 
                esperanza”.   
                <br><br>
                <span>FUENTE https://lamenteesmaravillosa.com</span>
                <br><br>
                Colore se dio a la tarea de buscar niños wixárikas, para entregarles un pequeño presente reforzando el valor de ser niño, preservando sus sonrisas y brindándoles un poco más de felicidad.
              </h5>   
            </td>
            <td class="cell "><img src="https://coloreaccesorios.com/img/mail/img_mail_4.jpg" alt="" class="img-bloq"></td>
          </tr>
          <tr class="row-space"></tr>
          <tr class="row">
            <td class="cell" colspan="2">
              <a href="https://coloreaccesorios.com"><img src="https://coloreaccesorios.com/img/mail/footer.jpg" alt="" class=""></a>
            </td>
          </tr>
          <tr class="row-space"></tr>
        </tbody>
      </table>
    </div>
   </div>
  </body>
</html>';

$name = $_POST['names'];

$email_sanitizes = filter_var( $to , FILTER_SANITIZE_EMAIL );


if( filter_var( $email_sanitizes , FILTER_VALIDATE_EMAIL) ){ 
    echo $count.':'.' ' . $name . ' ' . $email_sanitizes .'<br>';
      /*if (mail( $email_sanitizes , $subject, $message, $headers )){
          echo 'Enviado';
      }
      else{
         echo '<div class="row text-center"><h2>' . 'Tenemos un problema con tu email (' . $_POST['mails'] . ')' . '</h2></div>';  
      }
      echo $count .'==>' . ' ' . $_POST['mails'].'<br>';*/
    set_time_limit(30);
  }
  else
  {
     echo 'Error: ' .$count .'==>' . ' ' . $email_sanitizes .'<br>';
     echo '<div class="row text-center"><h2>' . 'Tenemos un problema con tu email (' . $email_sanitizes . ')' . '</h2></div>'; 
  }

/*
  try {
      filter_var( $email_sanitizes , FILTER_VALIDATE_EMAIL);

      echo $count .'==>' . ' ' . $name . ' ' . $email_sanitizes .'<br>';
      set_time_limit(25);
  } catch (Exception $e) {
    //echo 'Error: ' .$count .'==>' . ' ' . $_POST['mails'].'<br>';
      echo $count .'==>' . $e;
  }


  /*if( filter_var($_POST['mails'], FILTER_VALIDATE_EMAIL) ){ 
      if (mail( $to, $subject, $message, $headers )){
          //echo 'Enviado';
      }
      else{
         echo '<div class="row text-center"><h2>' . 'Tenemos un problema con tu email (' . $_POST['mails'] . ')' . '</h2></div>';  
      }
      echo $count .'==>' . ' ' . $_POST['mails'].'<br>';
  }
  else
  {
     echo 'Error: ' .$count .'==>' . ' ' . $_POST['mails'].'<br>';
     echo '<div class="row text-center"><h2>' . 'Tenemos un problema con tu email (' . $_POST['mails'] . ')' . '</h2></div>'; 
  }*/
 
?>