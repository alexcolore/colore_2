<?php 

'<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    table{
      width:  700px;border: none;}th{padding: 11px;}
    th a{
      text-decoration: none;
    }
    #head{
      width: 700px;
    }
    #logo img{
        margin-top: -112px;
        width: 250px;
    }
    a{
      color: white;
    }
    a:visited{
      color:  white;
    }
    .social-container{
      display: flex;
      padding-left: 235px;
    }
    .social{
      width: 30px;
      color: #003da6;
      padding: 0 21px 0 21px; 
    }
    .social-container p{
      padding: 0;
      margin: 0;
    }
    .card-container{
       padding-left:   10px;
      padding-right:  10px;
    }
    .card-text{
      background-color: #003da6;
      height: 150px;
    }
    .logos{
      width: 120px;
      padding-top: 11px;
    }
  </style>
</head>
<body>
<table cellspacing="0">
  <tr style="background-color: #003da6;">
    <th><a href="http://coloreaccesorios.com/accesorios.php" clas="headers" style="color:white; text-decoration: none">Accesorios</a></th>
    <th><a href="http://coloreaccesorios.com/acero.php" clas="headers" style="color:white; text-decoration: none">Acero</a></th> 
    <th><a href="http://coloreaccesorios.com/chapa.php" clas="headers" style="color:white; text-decoration: none">Chapa</a></th>
    <th><a href="http://coloreaccesorios.com/aplicaciones.php" clas="headers" style="color:white; text-decoration: none">Aplicaciones</a></th>
    <th><a href="http://coloreaccesorios.com/microsetting.php" clas="headers" style="color:white; text-decoration: none">Microsetting</a></th>
  </tr>
<tbody>  
  <tr style="width: 700px;"><td colspan=" 5"><div id="#head"><img src="http://coloreaccesorios.com/img/mail/img-head.png" alt=""></div></td></tr>
  <tr>
    <td colspan=" 5" style="text-align: center; ">
      <h1 style="color:#003da6;margin-top: 70px;">'. '¡Hola '. ucfirst($_POST['name_workshop']) .' '. ucfirst($_POST['lastname_workshop']) . '!'.'</h1>
    </td>
  </tr>
  <tr><td colspan="5"><hr style="background-color:  #003da6; height: 1px"></td></tr>
  
  <tr>
    <td colspan=" 5" style="text-align: center;"><h1 style="color:#003da6">¡Gracias por suscribirte a nuestro newsletter!</h1></td>
  </tr>

  <tr>
    <td colspan=" 5" style="text-align: center;"><p style="color:#003da6">A partir de ahora recibirás en tu correo información sobre los mejores accesorios y tendencias de moda para complementar tu estilo.</p></td>
  </tr>

  <tr>
    <td colspan="5" style="text-align: center;"><p style="color:#003da6">Síguenos en nuestras redes:</p></td>
  </tr>

    <tr>
      <td colspan="5" style="text-align: center;">
        <ul class="social-container">
          <a href="https://www.facebook.com/AccesoriosColore/"><img class="social" src="http://coloreaccesorios.com/img/mail/facebook.png" alt=""><p style="color: #003da6">Accesorios</p></a></li>
          <a href="https://es-la.facebook.com/ColoreAcero/"><img class="social" src="http://coloreaccesorios.com/img/mail/facebook.png" alt=""><p style="color: #003da6">Acero</p></a></li>
          <a href="https://www.instagram.com/coloremx/?hl=es-la"><img class="social" src="http://coloreaccesorios.com/img/mail/instagram.png" alt=""><p style="color: #003da6">Colore Mx</p></a></li>
        </ul>
      </td>
    </tr>
    <tr>
      <td colspan="5" style="text-align: center;"><p style="color:#003da6">Conoce todas nuestras líneas de producto y elige la mejor opción para ti:<br></td>
    </tr>
  </tbody>
</table>
<table style=" width:700px; border:none; padding: 0px 10px 0px 10px"  cellpadding="0"> 
   <tbody>
      <tr style="border: none; width:70%" >
         <td>
            <a href="http://coloreaccesorios.com/accesorios.php">
              <div class="card-container card-img"><img src="http://coloreaccesorios.com/img/mail/accesorios_cover.jpg" alt="" style="width:100%"></div>
            </a>
          </td>
         <td>
            <a href="http://coloreaccesorios.com/acero.php">
              <div class="card-container card-img"><img src="http://coloreaccesorios.com/img/mail/acero_cover.jpg" alt="" style="width:100%"></div>
            </a>
          </td>
         <td>
            <a href="http://coloreaccesorios.com/microsetting.php">
              <div class="card-container card-img"><img src="http://coloreaccesorios.com/img/mail/microsetting_cover.jpg" alt="" style="width:100%"></div>
            </a>
          </td>
    </tr>
   </tbody>
</table>
<div style="height:30px"></div>
<table style=" width:700px; border:none; padding: 0px 10px 0px 10px"  cellpadding="0">
    <tbody>
      <tr style="border: none; width:70%" >
         <td>
            <a href="http://coloreaccesorios.com/chapa.php">
              <div class="card-container card-img"><img src="http://coloreaccesorios.com/img/mail/chapa_cover.jpg" style="width:100%"></div>
            </a>
          </td>
         <td>
            <a href="http://coloreaccesorios.com/aplicaciones.php">
              <div class="card-container card-img"><img src="http://coloreaccesorios.com/img/mail/aplicaciones_cover.jpg" style="width:100%"></div>
            </a>
          </td>
          <td>
            <a href="http://coloreaccesorios.com/">
              <div class="card-container card-img"><img src="http://coloreaccesorios.com/img/mail/modarma_cover.jpg" style="width:100%"></div>
            </a>
          </td>
    </tr>
    </tbody>
</table></body></html>';

?>