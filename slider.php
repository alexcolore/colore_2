<!-- Slider -->
<div id="slider-main" class="overflow-hidden bg-color-primary">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <?php
          $i = 0; $j = 1;
          $res = $sql -> ConsultaBD( "SELECT * FROM slider_dp" );
          while(  $row = mysqli_fetch_array($res) ){
            if ( $i < 1 ) {
              echo '<div class="carousel-item active">'.
                      '<div class="'. 'slider-img-'.$j. ' ' . 'anime-slider' .'"></div>'.
                      '<div class="carousel-caption d-block">'.
                        '<h2 class="h1 text-uppercase monopoly-bold animated fadeInLeft letter-space" style="animation-delay: 0.3s">'. utf8_encode( $row['title_slider'] ) .'</h2>'.
                        '<p class="lead animated fadeInUp" style="animation-delay: 0.6s">'. utf8_encode($row['sub_slider']) .'</p>'.
                        '<a href="'. utf8_encode($row['link_slider']) .'" class="btn-colore text-uppercase animated fadeInUp" style="animation-delay: 1.1s">Ver más</a>'.
                      '</div>'.
                    '</div>';
                    $i++;
                    $j++;
            }
            else{
              echo '<div class="carousel-item">'.
                      '<div class="'. 'slider-img-'.$j. ' ' . 'anime-slider' .'"></div>'.
                      '<div class="carousel-caption d-block">'.
                        '<h2 class="h1 text-uppercase monopoly-bold animated fadeInLeft letter-space" style="animation-delay: 0.3s">'. utf8_encode( $row['title_slider'] ) .'</h2>'.
                        '<p class="lead animated fadeInUp" style="animation-delay: 0.6s">'. utf8_encode($row['sub_slider']) .'</p>'.
                        '<a href="'. utf8_encode($row['link_slider']) .'" class="btn-colore text-uppercase animated fadeInUp" style="animation-delay: 1.1s">Ver más</a>'.
                      '</div>'.
                    '</div>';
                    $j++;
              }
            }
      ?>
    </div>
    <div class="d-none d-sm-none d-md-block d-lg-block">
      <ol class="carousel-indicators">
        <?php 
          $i = 0;
          $res = $sql -> ConsultaBD( "SELECT * FROM slider_dp" );
          while(  $row = mysqli_fetch_array($res) ){
            if( $i < 1 ){
              echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'" class="active"></li>';
              $i++;
            }
            else{
              echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'"></li>';
              $i++;
            }
          }
        ?>
      </ol>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
