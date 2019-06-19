<?php require_once('dash-header.php') ?>
<div class="container-fluid">
            <?php
                include_once 'dash-menu.php'; 
            ?> 
            <div class="col-10">
                <div class="row">
                    <div class="container p-5">
                        <div class="col-12 p-0">
                            <h2><img src="../img/dashboard/flower.svg" id="logo-dash">Grupo Colore</h2>
                        </div>
                        <!-- Response  -->
                        <div id="dash-container" class="col-12 p-0"></div>
                        <div class="container-fluid p-0 mt-5">
                            <h3>Usuarios</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $res = $sql -> ConsultaBD( "SELECT * FROM users " );
                                    while($row = mysqli_fetch_array($res))
                                    {
                                        echo '<tr>';
                                            echo '<td>'. $row[0] .'</td>';
                                            echo '<td>'. $row[1] .'</td>';
                                            echo '<td>'. $row[2] .'</td>';
                                            echo '<td>'. $row[3] .'</td>';
                                            echo '<td>'. $row[4] .'</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>
