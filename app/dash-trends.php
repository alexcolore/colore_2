<?php require_once('dash-header.php') ?>
<div class="container-fluid">
    <?php include_once 'dash-menu.php'; ?>
        <div class="col-10 mt-5">
            <div class="container">
                <div class="row p-0 m-0">
                    <?php include_once 'dash-logo.php'; ?>
                    <div class="col-12 p-0 mt-5">
                        <div class="row m-0">

                            <div class="col-12 p-0">
                                <h4>TENDENCIAS DASHBOARD</h4>
                            </div>
                            <!-- Textos Intro -->
                            <div class="col-12 p-0">
                                <form action="trends_update.php" class="w-100">
                                    <?php
                                        $res = $sql -> ConsultaBD( " SELECT * FROM trends_header" );
                                        if(  $row = mysqli_fetch_array($res) ){
                                        echo '<div class="form-group">'.
                                                '<label for="">Titulo</label>'.
                                                '<input type="text" class="form-control" value="'. utf8_encode($row['title_trends']) .'">'.
                                            '</div>'.
                                            '<div class="form-group">'.
                                                '<label for="">Sub-Titulo</label>'.
                                                '<input type="text" class="form-control" value="'. utf8_encode($row['sub_trends']) .'">'.
                                            '</div>'.
                                            '<div class="form-group">'.
                                                '<label for="">Parrafo</label>'.
                                                '<textarea name="" class="form-control" id="" cols="30" rows="3">'. utf8_encode($row['pgraph_trends']) .'</textarea>'.
                                            '</div>'.
                                            '<div class="form-group text-right">'.
                                                '<button type="submit" class="btn btn-primary">Actualizar</button>'.
                                            '</div>';
                                        }
                                    ?>
                                </form>
                            </div>

                            <div class="col-12 p-0">
                                <div class="row">
                                    <!-- Slider Principal -->
                                    <div class="col-4">
                                        <?php 
                                            $res = $sql -> ConsultaBD( " SELECT * FROM tslider_shapes" );
                                            if(  $row = mysqli_fetch_array($res) ){
                                                echo '<form action="trends_update_shapes.php" class="w-100">'.
                                                        '<h4>Slider Principal</h4>'.
                                                        '<div class="form-group">'.
                                                            '<label for="" class="">Titulo</label>'.
                                                            '<input type="text" class="form-control" value="'. utf8_encode($row['title_shapes']) .'">'.
                                                        '</div>'.
                                                        '<div class="form-group">'.
                                                            '<label for="">Parrafo</label>'.
                                                            '<textarea name="" id="" rows="6" class="form-control">'. utf8_encode($row['pgraph_shapes']) .'</textarea>'.
                                                        '</div>'.
                                                        '<div class="form-group text-right">'.
                                                            '<button type="submit" class="btn btn-primary">Actualizar</button>'.
                                                        '</div>'.
                                                    '</form>';
                                            }
                                        ?>
                                        
                                        <?php 
                                                $res = $sql -> ConsultaBD( " SELECT * FROM tslider_shapes_imgs" );
                                                echo    '<h4>Imagenes</h4>'.
                                                        '<ul class="list-group">';
                                                while(  $row = mysqli_fetch_array($res) ){
                                                        echo '<li class="pb-3 list-group-item">'.
                                                                '<img src="'. '.' . $row['img'] .'" class="img-fluid w-100" alt="">'.
                                                            '</li>';
                                                    }
                                                echo    '</ul>';
                                        ?>
                                    </div>

                                    <!-- Slider Colores -->
                                    <div class="col-4">
                                        <?php 
                                            $res = $sql -> ConsultaBD( " SELECT * FROM tslider_colors" );
                                            if(  $row = mysqli_fetch_array($res) ){
                                                echo '<form action="trends_update_colors.php" class="w-100">'.
                                                        '<h4>Slider Colores</h4>'.
                                                        '<div class="form-group">'.
                                                            '<label for="" class="">Titulo</label>'.
                                                            '<input type="text" class="form-control" value="'. utf8_encode($row['title_colors']) .'">'.
                                                        '</div>'.
                                                        '<div class="form-group">'.
                                                            '<label for="">Parrafo</label>'.
                                                            '<textarea name="" id="" rows="6" class="form-control">'. utf8_encode($row['pgraph_colors']) .'</textarea>'.
                                                        '</div>'.
                                                        '<div class="form-group text-right">'.
                                                            '<button type="submit" class="btn btn-primary">Actualizar</button>'.
                                                        '</div>'.
                                                    '</form>';
                                            }
                                        ?>
                                        
                                        <?php 
                                                $res = $sql -> ConsultaBD( " SELECT * FROM tslider_colors_imgs" );
                                                echo    '<h4>Imagenes</h4>'.
                                                        '<ul class="list-group">';
                                                while(  $row = mysqli_fetch_array($res) ){
                                                        echo '<li class="pb-3 list-group-item">'.
                                                                '<img src="'. '.' . $row['img'] .'" class="img-fluid w-100" alt="">'.
                                                            '</li>';
                                                    }
                                                echo    '</ul>';
                                        ?>
                                    </div>

                                    <!-- Slider Texturas -->
                                    <div class="col-4">
                                        <?php 
                                            $res = $sql -> ConsultaBD( " SELECT * FROM tslider_textures" );
                                            if(  $row = mysqli_fetch_array($res) ){
                                                echo '<form action="trends_update_textures.php" class="w-100">'.
                                                        '<h4>Slider Principal</h4>'.
                                                        '<div class="form-group">'.
                                                            '<label for="" class="">Titulo</label>'.
                                                            '<input type="text" class="form-control" value="'. utf8_encode($row['title_textures']) .'">'.
                                                        '</div>'.
                                                        '<div class="form-group">'.
                                                            '<label for="">Parrafo</label>'.
                                                            '<textarea name="" id="" rows="6" class="form-control">'. utf8_encode($row['pgraph_textures']) .'</textarea>'.
                                                        '</div>'.
                                                        '<div class="form-group text-right">'.
                                                            '<button type="submit" class="btn btn-primary">Actualizar</button>'.
                                                        '</div>'.
                                                    '</form>';
                                            }
                                        ?>
                                        
                                        <?php 
                                                $res = $sql -> ConsultaBD( " SELECT * FROM tslider_textures_imgs" );
                                                echo    '<h4>Imagenes</h4>'.
                                                        '<ul class="list-group">';
                                                while(  $row = mysqli_fetch_array($res) ){
                                                        echo '<li class="pb-3 list-group-item">'.
                                                                '<img src="'. '.' . $row['img'] .'" class="img-fluid w-100" alt="">'.
                                                            '</li>';
                                                    }
                                                echo    '</ul>';
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
</div>
</body>

</html>