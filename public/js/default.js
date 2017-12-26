/**
* Main Script Options
*/
jQuery(document).ready(function(){
	"use strict"; 
InitHeight(); 
InitTestiSlider();
InitPortfolioFitRows();
InitFilterPortfolio();
InitCounter();
InitMobilMenu();
InitHeader();
	
});
jQuery(function(){
	"use strict"; 

InitHeightSlide();
	
});
 
		var defaultwidthwin = jQuery(window).width();
		var defaultheightwin = jQuery(window).height();
		
//------------------
//    Headers  
//-------------------
function InitHeader(){
	"use strict";
	
	if(jQuery('.main-navigation').length){	 
 			jQuery('.main-navigation').onePageNav({ easing: 'swing', scrollSpeed: 750});		
	}
}			

//---------------------
// Mobil Menu
//----------------------
function InitMobilMenu(){
	"use strict"; 
	if(jQuery('.mobil-menu').length){
	   if(defaultwidthwin < 801){
			jQuery(".mobil-menu .fa-bars").click(function(){
				 jQuery('.main-navigation').fadeIn();
					  jQuery('.mobil-menu .fa-bars').hide();
					  jQuery('.mobil-menu .fa-times').show();
				 
			});
			jQuery(".mobil-menu .fa-times").click(function(){
				 jQuery('.main-navigation').fadeOut();
					  jQuery('.mobil-menu .fa-bars').show();
					  jQuery('.mobil-menu .fa-times').hide();
				 
			});
	   }
	}
}
//---------------------
// Counter
//----------------------
function InitCounter(){
	"use strict"; 
	if(jQuery('.counter').length){
	   
			jQuery('.counter').each(function() {
				jQuery(this).appear(function() {
					jQuery(this).countTo();
				 
				},{accX: 0, accY: -50});
			});
	}
}	
//------------------
//    Filterable Portfolio
//-------------------
function InitFilterPortfolio(){
	"use strict";

	jQuery('.filter a').click(function(){
		var $this = jQuery(this).parent('li');
		if ( $this.hasClass('active') ) {
			return;
		}

		var $optionSet = $this.parents('.filter');
		$optionSet.find('.active').removeClass('active');
		$this.addClass('active');

		var selector = jQuery(this).attr('data-filter');
		jQuery('.portfolio-rows').isotope({ filter: selector });

			 
		return false;
	});
}		
//------------------
//   Fit Rows Portfolio
//-------------------
 		var repeatportfolioinit = setTimeout(function(){
			InitPortfolioFitRows();
			clearTimeout(repeatportfolioinit);
		},500); 
function InitPortfolioFitRows(){
	"use strict";
	
	if(jQuery('.portfolio-rows').length){ 
		 
		 
	var $container = jQuery('.portfolio-rows');
		$container.imagesLoaded(function () {
		$container.isotope({
		itemSelector: '.portfolio-item',
		layoutMode: 'masonry'
	});	
	});		
			 
	}
}

//------------------
//    Testimonials Slider 
//-------------------
function InitTestiSlider(){
	"use strict";
	
	if(jQuery('.testimonials-slider').length){
		jQuery('.testimonials-slider').bxSlider({ 
			auto: true,
			pager: true,
			controls: false
			
		});	
	}
}

//------------------
//    Height Slider 
//-------------------
function InitHeightSlide(){
	"use strict";
	
	if(jQuery('.slide-top').length){
		

		if(defaultwidthwin > 900){
			
		jQuery('.slide-top').css('height', defaultheightwin  );
			
		}
		
	}
}
//------------------
//    Fixed Header
//-------------------
function InitHeight(){
	"use strict";
	  
	if(jQuery('#header-wrap').length){  
				jQuery(window).scroll(function() { 
						var windowwidth4 = jQuery(window).width();
						if (windowwidth4 >= 1024){   
							if (jQuery(this).scrollTop() >0){  
								jQuery("#header-wrap").addClass("fixedheader");  
								
							}else{ 
								jQuery("#header-wrap").removeClass("fixedheader");  
							}
						}else{ 
							jQuery("#header-wrap").removeClass("fixedheader"); 
						}

					});
	}
}
