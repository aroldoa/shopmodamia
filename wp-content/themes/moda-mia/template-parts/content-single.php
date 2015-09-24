<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moda Mia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	asdfasdf
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moda-mia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

