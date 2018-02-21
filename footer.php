<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package faster
 */

?>

	 <div class="bottom_content">
         <div class="nycd clients">
		 
			<?php 
			
			$nos_clients = get_field('nos_clients','options'); 
			
			if($nos_clients): ?>
		 
            <h2>Nos clients</h2>
			
			<?php foreach($nos_clients as $client):  ?>
			
			
			
			
            <img alt="<?php echo $client['title']; ?>" src="<?php echo $client['url']; ?>" />    
			
			
			
			
			<?php endforeach; endif; ?>
			
         </div>
         <div class="nycd followUs">
		 
		
            <h2>Suivez-nous</h2>
			
			<?php 
			
			$facebook_url = get_field('facebook_url','options'); 
			
			if($facebook_url): ?>
            <a href="<?php echo $facebook_url['url']; ?>" class="fb"><?php echo $facebook_url['title']; ?></a>
			
			<?php endif; ?>
			
			<?php 
			
			$twitter_url = get_field('twitter_url','options'); 
			
			if($twitter_url): ?>
            <a href="<?php echo $twitter_url['url']; ?>" class="tw"><?php echo $twitter_url['title']; ?></a>
			<?php endif; ?>
			
			<?php 
			
			$google_plus_url = get_field('google_plus_url','options'); 
			
			if($google_plus_url): ?>
            <a href="<?php echo $google_plus_url['url']; ?>" class="g" rel="publisher"><?php echo $google_plus_url['title']; ?></a> 
			
			<?php endif; ?>
			
			
			
         </div>
      </div>
      <footer id="footer">
         <p>
		 <?php 
			
			$copy_right_text = get_field('copy_right_text','options'); 
			
			if($copy_right_text): ?>
			
			<?php echo $copy_right_text; ?>
            
         </p>
		<?php endif; ?>
		
		<?php $copy_right_link = get_field('copy_right_link','options'); 

		if($copy_right_link): ?>
         <p class="rea"><a href="<?php echo $copy_right_link['url']; ?> " onclick="window.open(this.href); return false;" title="<?php echo $copy_right_link['title']; ?>" ><?php echo $copy_right_link['title']; ?></a></p>
		 <?php endif; ?>
		 
      </footer>
	  
	  <?php wp_footer(); ?>
     
   </body>
</html>

