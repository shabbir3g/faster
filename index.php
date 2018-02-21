<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package faster
 */

get_header(); ?>



 <div id="content">
         <div id="main" class="fleft">
            
			<?php 
			
			if(have_posts()): 
			
			while(have_posts()): the_post();  ?>
			
			 <h2 class="nycd red_titles titre_fleches"><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
			<?php endwhile; endif; ?>
			
         </div>
         <div id="sidebar" class="fleft">
           <?php get_template_part('template-parts/sidebar-top'); ?>
            <div id="content_sidebar">
			
			
			
               <?php get_sidebar(); ?>
			   
			   
			   
			   
            </div>
			 <?php get_template_part('template-parts/sidebar-bottom'); ?>
            
         </div>
         <hr class="nof"/>
      </div>


<?php
get_footer();
