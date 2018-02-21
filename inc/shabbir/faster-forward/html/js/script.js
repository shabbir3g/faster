(function ($) {
	"use strict";
	
	// scroll to top
				
		$('.totop a').click(function(){
	
		
			$('html, body').animate({'scrollTop': '0px'},2000);
		
			return false;
		
		});
		
		$(window).scroll(function(){
			if($(window).scrollTop() > 500){
			
				$('.totop').fadeIn(1000);
			
			
			}else{
			
			$('.totop').fadeOut(1000);
			
			}
		});

	// scroll to top
	
	$(".drop-downmenu a").click(function() {
	  	$('#menu ul').slideToggle();
		
		return false;
	  	
	});
	


}(jQuery));