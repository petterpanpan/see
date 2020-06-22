/*
Author       : Theme_Ocean.
Template Name: Jennifer - Portfolio Photography HTML Template
Version      : 1.0
*/

(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
		/*PRELOADER JS*/
		$(window).on('load', function() { 
			$('.status').fadeOut();
			$('.preloader').delay(350).fadeOut('slow'); 
		}); 
		/*END PRELOADER JS*/	

		/*START MENU JS*/
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

			$(window).on('scroll', function() {
			  if ($(this).scrollTop() > 100) {
				$('.menu-top').addClass('menu-shrink');
			  } else {
				$('.menu-top').removeClass('menu-shrink');
			  }
			});
					
			$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
			});				
		/*END MENU JS*/

		/* START PORTFOLIO JS*/
		$('.portfolio-mfp').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
		/* END PORTFOLIO JS*/	

		/* START COUNTDOWN JS*/
		$('.counter_feature').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
			if (visible) {
				$(this).find('.timer').each(function () {
					var $this = $(this);
					$({ Counter: 0 }).animate({ Counter: $this.text() }, {
						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.ceil(this.Counter));
						}
					});
				});
				$(this).unbind('inview');
			}
		});
		/* END COUNTDOWN JS */

		/*START TESTIMONIAL CAROUSEL JS*/
		$('.carousel').carousel({
			interval:10000,
			pause:"false",
		});
		/*END TESTIMONIAL CAROUSEL JS*/				
	   
	  });
	  
		 /* START PARALLAX JS */
		(function () {
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) { 
			} else {
				$(window).stellar({
					horizontalScrolling: false,
					responsive: true
				});
			}
		}());
		/* END PARALLAX JS  */

		
})(jQuery);

