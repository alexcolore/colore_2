<div class="row m-0">
	<div id="trends-container" class="container overflow-hidden">
		<div class="row justify-content-center text-center my-5">
			<?php
				$res = $sql -> ConsultaBD( " SELECT * FROM trends_header" );
				if(  $row = mysqli_fetch_array($res) ){
					echo '<div class="col-12 my-5">'.
						 	'<h2 class="uppercase text-primary-colore letter-space monopoly-bold trends-title">'. utf8_encode($row[1]) .'</h2>'.
						 	'<h4 class="uppercase trends-title lead letter-space">'. utf8_encode($row[2]) .'</h4>'.
						'</div>'.
						'<div class="col-12 lead">'.
						 	'<p class="trends-title mb-3 text-center">'. utf8_encode($row[3]) .'</p>'.
						'</div>';
				}
			?>
			<!-- Slider Mosaic Tredns -->
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mb-lg-0 overflow-hidden my-3 mb-sm-3 mb-lg-0">
				<div id="" class="carousel slide carousel-fade trends-1" data-ride="carousel">
					<div class="carousel-inner">
						<?php
							$i = 0;
							$res = $sql -> ConsultaBD( "SELECT * FROM tslider_shapes_imgs" );
							while(  $row = mysqli_fetch_array($res) ){
								if ( $i < 1 ) {
									echo '<div class="carousel-item active">
								    		<img src="'. utf8_encode($row['img']) .'" class="img-fluid w-100" alt="img-shapes">
								    	</div>';
								    $i++;
								}
								else{
									echo '<div class="carousel-item">
								    		<img src="'. utf8_encode($row['img']) .'" class="img-fluid w-100" alt="img-shapes">
								   		 </div>';
								}
							}
						?>
					</div>
				</div>
				<div class="carousel-captionn my-4 text-center">
					<?php 
						$res = $sql -> ConsultaBD( " SELECT * FROM tslider_shapes " );
						if(  $row = mysqli_fetch_array($res) ){
							echo '<div class="trends-2">'.
									'<h3 class="text-left uppercase text-primary-colore monopoly-bold">'. utf8_encode($row[1])  .'</h3>'.
									'<hr>'.
									'<p class="lead">'. utf8_encode($row[2]) .'</p>'.
								'</div>';
						}
					?>
			    </div>
			</div>
			<!-- Slider Colors & Textures -->
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-0 my-sm-0 my-md-3 my-lg-3" >
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="carousel slide carousel-fade trends-3" data-ride="carousel">
							<div class="carousel-caption text-center d-none d-md-block d-lg-block">
								<?php 
									$res = $sql -> ConsultaBD( " SELECT * FROM tslider_colors " );
									if(  $row = mysqli_fetch_array($res) ){
										echo 	'<h3 class="text-left uppercase monopoly-bold">'. utf8_encode($row[1])  .'</h3>'.
						       					'<p class="">'. utf8_encode($row[2]) .'</p>';
									}
								?>
					        </div>
						  	<div class="carousel-inner" >
								<?php
									$i = 0;
									$res = $sql -> ConsultaBD( "SELECT * FROM tslider_colors_imgs" );
									while(  $row = mysqli_fetch_array($res) ){
										if ( $i < 1 ) {
											echo '<div class="carousel-item active">
										    		<img src="'. utf8_encode($row['img']) .'" class="img-fluid w-100" alt="img-shapes">
										    	</div>';
										    $i++;
										}
										else{
											echo '<div class="carousel-item">
										    		<img src="'. utf8_encode($row['img']) .'" class="img-fluid w-100" alt="img-shapes">
										   		 </div>';
										}
									}
								?>
						  	</div>
						</div>
					</div>

					<div class="col-12 d-block d-sm-block d-md-none d-lg-none">
						<div class="carousel-captionn my-4 text-center">
							<div class="trends-3">
								<?php 
									$res = $sql -> ConsultaBD( " SELECT * FROM tslider_colors " );
									if(  $row = mysqli_fetch_array($res) ){
										echo 	'<h3 class="text-left text-primary-colore uppercase monopoly-bold">'. utf8_encode($row[1])  .'</h3>'.
												'<hr>'.
						       					'<p class="lead">'. utf8_encode($row[2]) .'</p>';
									}
								?>
							</div>
					    </div>
					</div> 

					<div class="col-sm-12 col-md-12 col-lg-12 align-self-end" style="margin-top: 0.85rem">
						<div class="carousel slide carousel-fade carousel-colors trends-4" data-ride="carousel" >
						  	<div class="carousel-inner" >
							    <?php
									$i = 0;
									$res = $sql -> ConsultaBD( "SELECT * FROM tslider_textures_imgs" );
									while(  $row = mysqli_fetch_array($res) ){
										if ( $i < 1 ) {
											echo '<div class="carousel-item active">
										    		<img src="'. utf8_encode($row['img']) .'" class="img-fluid w-100" alt="img-shapes">
										    	</div>';
										    $i++;
										}
										else{
											echo '<div class="carousel-item">
										    		<img src="'. utf8_encode($row['img']) .'" class="img-fluid w-100" alt="img-shapes">
										   		 </div>';
										}
									}
								?>
						  	</div>
						</div>
						<div class="carousel-captionn my-4 text-center">
							<div class="trends-5">
								<?php 
									$res = $sql -> ConsultaBD( " SELECT * FROM tslider_textures " );
									if(  $row = mysqli_fetch_array($res) ){
										echo 	'<h3 class="text-left text-primary-colore uppercase monopoly-bold">'. utf8_encode($row[1])  .'</h3>'.
												'<hr>'.
						       					'<p class="lead">'. utf8_encode($row[2]) .'</p>';
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

