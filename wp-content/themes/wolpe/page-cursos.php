<?php
$args_cursos = array(
	'post_type' => 'cursos',
	'order'    => 'DESC',
);
$cursos = new WP_Query($args_cursos);
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="cards">
				<?php if ($cursos->have_posts()) : while ($cursos->have_posts()) : $cursos->the_post();
						get_template_part('template-parts/content', 'cursos');
					endwhile;
				endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
