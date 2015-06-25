<?php
/*
Template Name: Page ohne Sidebar
*/


get_header(); ?>
    <div class="container"> 
                    <div class="row"> 
                    	<div class="col-md-12">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page-sidebar' ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>

		</div>
	</div>                          
<?php get_footer(); ?>
