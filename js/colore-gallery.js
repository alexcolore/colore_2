
let close_gallery = document.querySelectorAll('.close-card');
let gallery_action = document.querySelectorAll('.a-colore');
let caption_gallery = document.querySelectorAll('.caption-gallery');
let gallery_lenght = gallery_action.length;


for (var i = 0; i < gallery_lenght ; i++) {
	close_gallery[i].addEventListener('click', function(e){
		anime({
			targets: e.target.offsetParent,
			translateY: [0,600],
			opacity: 0,
			easing: 'easeOutExpo',
			duration: 1200,
		});
			e.target.offsetParent.classList.remove('active');
	});
}
for (var j = 0; j < gallery_lenght ; j++){
	gallery_action[j].addEventListener('click', function(e){
	var colore_target = e.target.parentElement.offsetParent.childNodes[1];
		if( window.location.pathname == '/colore/accesorios.php' ){
			anime({
				targets: colore_target,
				backgroundColor:'rgb(255,68,56)',
				opacity: [0,0.90],
				translateY: [600,0],
				easing: 'easeOutExpo',
				duration: 1200,
				begin: function(anim) {
					close_before();
					close_gal();
					set_active(e);
				}
			});
		}//Accesorios
		if( window.location.pathname == '/colore/acero.php'){
			anime({
				targets: colore_target,
				backgroundColor: 'rgb(0,187,180)',
				opacity: [0,0.90],
				translateY: [600,0],
				easing: 'easeOutExpo',
				duration: 1200,
				begin: function(anim) {
					close_before();
					close_gal();
					set_active(e);
				}
			});
		}//Acero
		if( window.location.pathname == '/colore/chapa.php'){
			anime({
				targets: colore_target,
				backgroundColor: 'rgb(245,179,53)',
				translateY: [600,0],
				opacity: 0.90,
				easing: 'easeOutExpo',
				duration: 1200,
				begin: function(anim) {
					close_before();
					close_gal();
					set_active(e);
				}
			});
		}//Chapa
		if( window.location.pathname == '/colore/aplicaciones.php'){
			anime({
				targets: colore_target,
				backgroundColor: 'rgb(242,127,178)',
				translateY: [600,0],
				opacity: 0.90,
				easing: 'easeOutExpo',
				duration: 1200,
				begin: function(anim) {
					close_before();
					close_gal();
					set_active(e);
				}
			});
		}//aplicaciones
		if( window.location.pathname == '/colore/microsetting.php'){
			anime({
				targets: colore_target,
				backgroundColor: 'rgb(245,179,53)',
				translateY: [600,0],
				opacity: 0.90,
				easing: 'easeOutExpo',
				duration: 1200,
				begin: function(anim) {
					close_before();
					close_gal();
					set_active(e);
				}
			});
		}//Microsseting
	});
}
function close_before(){
	anime({
		targets: document.querySelectorAll('.active'),
		translateY: [0,600],
		opacity: 0,
		easing: 'easeOutExpo',
		duration: 1200,
	});
}
function set_active(e){
	e.target.parentNode.parentNode.querySelector('.caption-gallery').style.zIndex = '1';
	e.target.parentNode.parentNode.querySelector('.caption-gallery').classList.add('active'); 
}
function close_gal(){
	var query_active = document.querySelectorAll('.caption-gallery');
	for (var i = 0; i < query_active.length ; i++) {
		if(query_active[i].classList.contains('active') ){
			query_active[i].classList.remove('active');
		}
	}
}

