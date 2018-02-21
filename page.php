<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
