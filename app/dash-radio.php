<?php require_once('dash-header.php') ?>
<div class="container-fluid">
        <?php include_once 'dash-menu.php'; ?> 
        <div class="col-10">
            <div class="row">
                <div class="container p-5">
                    <div class="col-12 p-0">
                        <h2><img src="../img/dashboard/flower.svg" id="logo-dash">Grupo Colore</h2>
                    </div>

                    <div class="col-12 p-0 mt-5">
                        <h3>RADIO DASHBOARD</h3>
                    </div>

                    <div class="col-12 mt-3">
                        <h4>Radio Actual</h4>
                        <audio controls class="w-100" style="background-color: #f1f4f4;">
                            <source src="../audio/colore_radio.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>

                     <div class="col-12 p-0 mt-5">
                        <form>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".mp3,audio/*">
                          </div>
                        </form>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
