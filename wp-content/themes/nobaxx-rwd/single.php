<?php
/**
 * The template for displaying all single posts.
 *
 * @package nobaxx-rwd
 */

get_header(); ?>

	<section>        	
                <div class="container"> 
                    <div class="row"> 
                    	<div class="col-md-12">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>


		<?php endwhile; // end of the loop. ?>



<?php get_sidebar(); ?>
	</div><!-- #primary -->
</div>
</div>
</section>
<?php get_footer(); ?>
