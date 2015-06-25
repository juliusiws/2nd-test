<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package nobaxx-rwd
 */
?>
</div>
</div>
<header class="entry-header">

                               <?php the_title( '<h2>', '</h2>' ); ?>

	</header><!-- .entry-header -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content col-md-9">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
<div class="col-md-3 custom-sidebar">
				<?php get_sidebar(); ?>
			</div>
</article><!-- #post-## -->





        