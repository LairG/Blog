<?php
/**
 * The template for displaying all single posts.
 *
 * @package Button
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'components/content', 'single' ); ?>

			<?php the_post_navigation( array( 'next_text' => __( '<span class="meta-nav">Next Post</span> %title', 'button' ), 'prev_text' => __( '<span class="meta-nav">Previous Post</span> %title', 'button' ) ) ); ?>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
