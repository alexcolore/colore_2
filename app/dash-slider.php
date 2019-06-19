<?php require_once('dash-header.php') ?>
<div class="container-fluid">
            <?php include_once 'dash-menu.php'; ?> 
            <div class="col-10">
                <div class="row">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-12 p-0">
                                <h2><img src="../img/dashboard/flower.svg" id="logo-dash">Grupo Colore</h2>
                            </div>
                            <div class="col-12 p-0 mt-5">
                                <h4>SLIDER DASHBOARD</h4>
                            </div>

                            <div class="col-12 p-0 mt-5">
                                <h4>Slider Desktop</h4>
                                <div class="row">
                                    <div class="col-12">
                                    <?php 
                                        $res = $sql -> ConsultaBD( "SELECT * FROM slider_dp " );
                                        while($row = mysqli_fetch_array($res))
                                        {
                                        echo '<div class="row">'.
                                                '<div class="col-6">'.
                                                    '<form action="" class="w-100">'.
                                                        '<div class="form-group">'.
                                                            '<label for="">Titulo</label>'.
                                                            '<input type="text" class="form-control" value="'. utf8_encode($row['title_slider']) .'">'.
                                                        '</div>'.
                                                        '<div class="form-group">'.
                                                            '<label for="">Sub-titulo</label>'.
                                                            '<input type="text" class="form-control" value="'. utf8_encode($row['sub_slider']) .'">'.
                                                        '</div>'.
                                                        '<div class="form-group">'.
                                                            '<label for="">link</label>'.
                                                            '<input type="text" class="form-control" value="'. utf8_encode($row['link_slider']) .'">'.
                                                        '</div>'.
                                                        '<div class="form-group">'.
                                                            '<button class="btn btn-primary">Actualizar</button>'.
                                                        '</div>'.
                                                    '</form>'.
                                                '</div>'.
                                                '<div class="col-6">'.
                                                    '<img src="'. '.' . $row['img_slider'] .'" alt="" class="w-100">'.
                                                '</div>'.
                                            '</div>'.
                                            '<hr>';
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-12 p-0">
                                <h4>Slider Movil</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <?php 
                                            $res = $sql -> ConsultaBD( "SELECT * FROM slider_ml " );
                                            while($row = mysqli_fetch_array($res))
                                            {
                                            echo '<div class="row">'.
                                                    '<div class="col-6">'.
                                                        '<form action="" class="w-100">'.
                                                            '<div class="form-group">'.
                                                                '<label for="">Titulo</label>'.
                                                                '<input type="text" class="form-control" value="'. utf8_encode($row['title_slider']) .'">'.
                                                            '</div>'.
                                                            '<div class="form-group">'.
                                                                '<label for="">Sub-titulo</label>'.
                                                                '<input type="text" class="form-control" value="'. utf8_encode($row['sub_slider']) .'">'.
                                                            '</div>'.
                                                            '<div class="form-group">'.
                                                                '<label for="">link</label>'.
                                                                '<input type="text" class="form-control" value="'. utf8_encode($row['link_slider']) .'">'.
                                                            '</div>'.
                                                            '<div class="form-group">'.
                                                                '<button class="btn btn-primary">Actualizar</button>'.
                                                            '</div>'.
                                                        '</form>'.
                                                    '</div>'.
                                                    '<div class="col-6">'.
                                                        '<img src="'. '.' . $row['img_slider'] .'" alt="" class="w-100">'.
                                                    '</div>'.
                                                '</div>'.
                                                '<hr>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>
