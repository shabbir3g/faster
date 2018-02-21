(function ($) {
	"use strict";
	
	
		
	if(window.location == "http://localhost/faster/") {
		
          $('#menu').addClass('accueil');
		  
     }else if(window.location == "http://localhost/faster/competences/"){
		 
		  $('#menu').addClass('competences');
	 }
	 else if(window.location == "http://localhost/faster/notre-concept/"){
		 
		  $('#menu').addClass('concept');
	 }
	 else if(window.location == "http://localhost/faster/notre-gamme-de-formations/"){
		 
		  $('#menu').addClass('formations');
	 }
	 else if(window.location == "http://localhost/faster/dif-cpf/"){
		 
		  $('#menu').addClass('dif');
		  
	 }else if(window.location == "http://localhost/faster/contact/"){
		 
		  $('#menu').addClass('contact');
	 }
	 else{
		  $('#menu').addClass('accueil');
	 }
		
		
	
	//alert(window.location)
	
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
	
	 
	// switch (window.location.) {
   // case '/competences':
       // $('#menu').addClass('competences');
		// $('#menu').removeClass('accueil');
        // break; 
	// case '/something':
       // $('#menu').addClass('competences');
		// $('#menu').removeClass('accueil');
        // break; 
    // default: 
       // $('#menu').addClass('accueil');
	// }
	
	
}(jQuery));