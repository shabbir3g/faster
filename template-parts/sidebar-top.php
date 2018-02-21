<?php 

		$sidebar_top_link = get_field('sidebar_top_link','options'); 
		if($sidebar_top_link): ?> 
 
 <div class="test_niveau nycd">
   <h3>
	
	
	  <a href="<?php echo $sidebar_top_link['url']; ?>" title="<?php echo $sidebar_top_link['title']; ?>">
	  
	  <?php 

		$sidear_top_text = get_field('sidear_top_text','options'); 
		if($sidear_top_text): ?> 
	  
	  <?php echo $sidear_top_text; ?>
	 
	  
	  <?php endif; ?>
	  
	  </a> 
	  
	
	  
   </h3>
</div>
<?php endif; ?>