<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  ?>
<div class="row" style="height: 100vh;">
    <div class="col-2 overflow-hidden d-flex justify-content-center" style="background-color: #003da6;">
        <div id="dash-menu-bar">
            <div class="row pt-3">
                <div class="col-12">
                    <ul class="text-center list-item-container mb-5">
                        <li class="list-item-avatar"><i class="fas fa-user"></i></li>
                        <li class="list-item-user"><?php echo ucfirst($_SESSION['user']); ?></li>
                    </ul>
                </div>
                <div id="dash-menu" class="col-12">
                    <ul class="text-left dash-menu">
                        <li><a href="log-in.php" id="dash-home"><i class="fas fa-home"></i>Inicio</a></li>
                        <li><a href="dash-users.php" id="dash-users"><i class="fas fa-users"></i>Usuarios</a></li>
                        <li><a href="dash-trends.php" id="dash-trends"><i class="fas fa-fire-alt"></i>Tendencias</a></li>
                        <li><a href="dash-slider.php" id="dash-slider"><i class="far fa-image"></i>Slider</a></li>
                        <li><a href="dash-radio.php" id="dash-radio"><i class="fas fa-volume-up"></i>Radio</a></li>
                        <li><a href="dash-stores.php" id="dash-stores"><i class="fas fa-store"></i>Tiendas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<script>
   /* class MenuDash{
        constructor(id){
            this.id = id;
        }
        setListeners(){
            for (var i = 0; i < this.id.length; i++) {
                this.id[i].addEventListener(  'click' , function get_page(e){
                    e.preventDefault();
                    get_link(this);
                }); 
            }
            return this.id;    
        }
    }

    dash_set_menu = document.getElementById('dash-menu').getElementsByTagName('a');
    let get_id = new MenuDash( dash_set_menu );
    get_id.setListeners();

    function get_link(el){
        let link = el.getAttribute('href');
        let xhr = new XMLHttpRequest;
        xhr.open("POST","dash-links.php",true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send("link="+link);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('dash-container').innerHTML = xhr.responseText;
                xhr.abort();
            } 
        }	
    }    */
</script>