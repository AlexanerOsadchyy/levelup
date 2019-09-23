<?php
/*
Template Name: Страница всех статей
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>

<div class="posts_page">
	<div class="container">


	<div class="content">

		<div class="news">
			<?php echo do_shortcode('[the_grid name="Last Articles"]'); ?>
		</div>
		<div class="sidebar">


<?php
	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar('blog-sidebar');
?>
		</div>


	</div>
</div>
</div>


		</main><!-- .site-main -->
	</div>

<?php get_footer(); ?>