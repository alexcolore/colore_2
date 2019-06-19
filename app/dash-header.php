<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('/requires.php'); ?>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo colore_css; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo colore_css; ?>style_admin.css">
</head>
<body>
<?php   require_once('colore_cn.php');
    $sql = new Conn(); ?>