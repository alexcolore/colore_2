<?php 
session_start();
if( isset($_SESSION['user'])){ header('location: ./app/log-in.php'); }
else{ 
    include_once './app/dash-header.php';
?>
    <div id="form-dashboard">
        <div class="row p-0 m-0">
            <form action="./app/dashboard.php" method="POST" class="bg-white p-5">
                <div class="form_card">
                    <div class="col-12 text-center mb-5"><img src="./img/logo_blue.svg" alt=""></div>
                    <div class="col-12 text-center"><h4 class="colore-blue">Dashborad</h4></div>
                    <div class="col-12 form-group">
                        <label for="" class="h6">Usuario</label>
                        <input type="text" name="user" id="user_form" class="form-control" autocomplete>
                        <small id="error-login-user">Ingresa tu nombre de usuario</small>
                    </div>
                    <div class="col-12 form-group">
                        <label for="" class="h6">Contraseña</label>
                        <input type="password" name="password" id="password_form" class="form-control" autocomplete>
                        <small id="error-login-password">Ingresa tu contraseña</small>
                    </div>
                    <div class="col-12 form-group">
                        <input type="submit" value="Login" class="form-control btn btn-lg btn-colore-blue text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php } ?>

    
