window.onload = function() {
	loader();
}
/* Load Animation */
function loader(){					
	if( window.location.pathname == '/colore/' || window.location.pathname == '/colore/index.php' ){			
	//if( window.location.pathname == '/' || window.location.pathname == '/index' ){
		let loader = document.getElementById('loader');
		let slider_img = document.querySelectorAll('.anime-slider')[0];
			slider_img.style.opacity = '0';
		$('#slider-main').on('slide.bs.carousel', function () {
			anime({
				targets: '.anime-slider',
				scale: [1.3 , 1],
				easing: 'easeOutExpo',
				duration: 1900
			});
		});
		$('#slider-main').on('slid.bs.carousel', function () {
			anime({
				targets: '.anime-slider',
				scale: 1,
				easing: 'easeOutExpo',
				duration: 1900
			});
		});
		anime({
			targets: loader,
			opacity: 0,
			easing: 'easeOutExpo',
			complete: function(anim){
				loader.style.display = 'none';
				anime({
					targets: slider_img,
					opacity: [0,1],
					scale: [1.3 , 1],
					easing: 'easeOutExpo',
					duration: 1900,
					delay: 300,
				});
				anime({
					targets: document.getElementsByClassName('text-intro'),
					easing: 'easeOutExpo',
					translateY: [330,0],
					duration: 1900,
					delay: anime.stagger(360),
				});
			}
		});
		/* Efecto Hover Imagenes de Lineas */
		var lines_fx = document.getElementById('lines-container');
		var lines_lenght = lines_fx.getElementsByTagName('a');
		for (var i = 0 ; i < lines_lenght.length ; i++) {
			lines_fx.getElementsByTagName('a')[i].addEventListener('mouseenter', function (e){
				this.getElementsByClassName('gallery-img')[0].style.transform = 'scale(1.16)';
				this.getElementsByClassName('logo-gallery')[0].style.opacity = '1';
			});
		}
		for (var i = 0 ; i < lines_lenght.length ; i++) {
			lines_fx.getElementsByTagName('a')[i].addEventListener('mouseleave', function (e){
				this.getElementsByClassName('gallery-img')[0].style.transform = 'scale(1)'
				this.getElementsByClassName('logo-gallery')[0].style.opacity = '0';
			});
		}
	}
	else {
		page_animation();
	}
}

/* OnLoad Page Timelines Animation Index*/
function page_animation(){
	anime({
		targets: document.getElementsByClassName('img-intro'),
		opacity: 1,
		scale: [1.6,1],
		easing: 'easeOutExpo',
		duration: 1900
	});
	anime({
		targets: document.getElementsByClassName('title-colore'),
		translateX: [1900,0],
		easing: 'easeOutExpo',
	});
	anime({
		targets: '.logo-diamond',
		opacity: 1,
		translateY: [1900,0],
		easing: 'easeOutExpo',
		duration: 1900
	});
	anime({
		targets: document.querySelector('.suc-1'),
		opacity: 1,
		translateY: [600,0],
		easing: 'easeOutExpo',
		duration: 1900
	});
	anime({
		targets: document.querySelector('.suc-2'),
		opacity: 1,
		translateY: [600,0],
		easing: 'easeOutExpo',
		delay: 160,
		duration: 1900
	});
	anime({
		targets: document.querySelector('.suc-3'),
		opacity: [0,1],
		translateY: [600,0],
		easing: 'easeOutExpo',
		delay: 320,
		duration: 1900
	});
	anime({
		targets: document.querySelector('.suc-4'),
		opacity: 1,
		translateX: [-1920,0],
		easing: 'easeOutExpo',
		delay: 480,
		duration: 1900
	});
	anime({
		targets: document.querySelector('.suc-5'),
		opacity: 1,
		translateX: [1920,0],
		easing: 'easeOutExpo',
		delay: 480,
		duration: 1900
	});
	var op_a = 0;
	var $p_colore = $('.p-colore');
	$p_colore.waypoint(function (direction) {
		if(op_a <= 0){
			if(direction === 'down'){
			anime({
				targets: '.p-colore',
				opacity: [0,1],
				translateY: [900,0],
				easing: 'easeOutExpo',
				duration: 1900
				});
			}
			op_a = 1;
		}
	}, { offset: '200%' });
	var op_b = 0;
	var $gallery_colore = $('.trigger-gallery');
	$gallery_colore.waypoint(function (direction) {
		if(op_b <= 0){
			if(direction === 'down'){
			anime({
				targets: ['.gallery-card'],
				opacity: [0,1],
				translateY: [600,0],
				easing: 'easeOutExpo',
				delay: anime.stagger(360),
				duration: 1800
				});
			}
			op_b = 1;
		}
	}, { offset: '80%' });
}
	/* Trends Colore */
	var trends_op = 0;
	var $trends = $('#trends-container');
		$trends.waypoint(function(direction){
			if(trends_op <= 0){
				if(direction == 'down'){
					var trends = anime.timeline({
						easing: 'easeOutExpo',
						duration: 900,
					})
					trends
					.add({
						targets: '.trends-title',
						opacity: [0,1],
						translateY: [300 , 0],
					})
					.add({
						targets: '.trends-1',
						opacity: [0,1],
						translateY: [300 , 0],
					}, '-=400')
					.add({
						targets: '.trends-2',
						opacity: [0,1],
						translateX: [600 , 0],	
					}, '-=400')
					.add({
						targets: '.trends-3',
						opacity: [0,1],
						translateX: [100 , 0],		
					}, '-=400')
					.add({
						targets: '.trends-4',
						opacity: [0,1],
						translateX: [100 , 0],		
					}, '-=400')
					.add({
						targets: '.trends-5',
						opacity: [0,1],
						translateX: [100 , 0],		
					}, '-=500')
					.add({
						targets: '.trends-6',
						opacity: [0,1],
						translateY: [100 , 0],		
					}, '-=400')
				trends_op = 1;
			}
		}
	}, { offset: '60%' });
	/* Lines Animation Intro Colore */
	var lines_op = 0;
	var $lines_container = $('#lines-container');
		$lines_container.waypoint(function ( direction ) {
			if(lines_op <= 0){
				if(direction == 'down'){
					var lines_timeline = anime.timeline({
						easing: 'easeOutExpo',
						duration: 900,
					});
					lines_timeline
					.add({
						targets: '.lines-title',
						opacity: [0,1],
						translateY: [300 , 0],
					})
					.add({
						targets: '.lines-1',
						opacity: [0,1],
						translateY: [300 , 0],
					}, '-=400')
					.add({
						targets: '.lines-2',
						opacity: [0,1],
						translateX: [600 , 0],	
					}, '-=400')
					.add({
						targets: '.lines-3',
						opacity: [0,1],
						translateY: [300 , 0],		
					}, '-=400')
					.add({
						targets: '.lines-4',
						opacity: [0,1],
						translateY: [300 , 0],		
					}, '-=400')
					.add({
						targets: '.lines-5',
						opacity: [0,1],
						translateY: [300 , 0],		
					}, '-=400');
			}
			lines_op = 1;
		}
	}, { offset: '70%' });

	