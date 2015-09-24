<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moda Mia
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container">
	
	<div class="row">
		
		<?php get_template_part( 'template-parts/content', 'specials' ); ?>
		
	</div>
	
	<div class="row">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moda-mia' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>
</div>
</article><!-- #post-## -->