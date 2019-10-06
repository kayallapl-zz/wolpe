<?php
$args_artigos = array(
	'post_type' => 'artigos',
	'order'    => 'DESC',
);
$artigos = new WP_Query($args_artigos);
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="cards">
				<?php if ($artigos->have_posts()) : while ($artigos->have_posts()) : $artigos->the_post();
						get_template_part('template-parts/content', 'artigos');
					endwhile;
				endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
