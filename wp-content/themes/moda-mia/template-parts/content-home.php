<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moda Mia
 */

?>


<div class="showcase">
	
	<div class="row">
	
 <?php echo do_shortcode('[rev_slider alias="home"]'); ?>   
 
 	</div>
 
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="container">
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

</article><!-- #post-## -->

<?php get_template_part( 'template-parts/content', 'instagram' ); ?>

<div class="clearfix"></div>

<?php get_template_part( 'template-parts/content', 'newsletter' ); ?>
