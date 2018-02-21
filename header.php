<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package faster
 */

?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
  </head>
   <body <?php body_class(); ?>>
      <header id="header" 
	  <?php $header_banner =  get_field('header_banner','options');

		if($header_banner): ?> style="background: url(<?php echo $header_banner['url'];  ?>) no-repeat;"
	  <?php endif; ?>
	  
	  >
         <ul class="contact_infos">
		 
			<?php

			$phone_number = get_field('phone_number','options'); 
			if($phone_number): 
			
			foreach($phone_number as $numbers): ?>
		 
            <li><span class="picto_tel"></span><span class="contact_numbers"><?php echo $numbers['number_phone']; ?></span></li>
			
			<?php endforeach; endif; ?>
			
         </ul>
		
		<?php 
		$logo_uploader = get_field('logo_uploader','options');
		
	
		
		if($logo_uploader):  ?>
         <a href="<?php echo home_url(); ?>"><img alt="Faster Forward - ingenierie de formation" id="logo_fasterforward" src="<?php echo $logo_uploader['url']; ?>" /></a>
		 <?php 	endif; ?>
		 
      </header>
      <div class="top_content"></div>
      <nav id="menu" class="accueil">
		<div class="drop-downmenu"><a href="#"><i class="fa fa-bars"></i></a></div>
		
		<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1'
				) );
			?>
			
         <hr class="nof"/>
      </nav>




