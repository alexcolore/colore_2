<?php
    include_once 'dash-header.php';
    session_start();
    $usr = $_POST['user'];
    $password = $_POST['password'];
    $_SESSION['user'] = $usr;
    $usr_logged = $_SESSION['user'];

    $res = $sql -> ConsultaBD( "SELECT * FROM users WHERE user_name = '$usr_logged' AND user_password = '$password' " );

    if(  $row = mysqli_fetch_array($res) ){
        //include_once 'log-in.php';
        header('location: log-in.php ');
    }
    else{
        //include_once 'log-error.php';;
        echo "Error bb";
        unset($_SESSION['user']);
    }
?>