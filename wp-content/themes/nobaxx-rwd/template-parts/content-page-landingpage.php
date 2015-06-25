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
	<div class="row landing-top-margin">
		<div class="col-md-12">
                               <?php the_title( '<h2>', '</h2>' ); ?>
        </div>
     </div>

	</header><!-- .entry-header -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content col-md-12">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nobaxx-rwd' ),
				'after'  => '</div>',
			) );
		?>
		
	</div><!-- .entry-content -->
<div class="col-md-12 landingsidebar">
				<?php dynamic_sidebar( 'standort' ); ?> 
			</div>
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'nobaxx-rwd' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->





