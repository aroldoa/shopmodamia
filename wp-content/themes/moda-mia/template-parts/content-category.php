<?php
/**
 * Template part for displaying page content in page.php.
 * 
 * Template Name: Category
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moda Mia
 */

get_header ()?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php get_sidebar('shop'); ?>
		</div>
		
		<div class="col-md-9">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moda-mia' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
</div>
</article><!-- #post-## -->

<?php get_footer ()?>