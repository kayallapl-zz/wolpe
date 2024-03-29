<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wolpe
 */

get_header();
?>

<section id="Tratamentos" class="intern-section">
	<wrapper>
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php if (have_posts()) : ?>
					<header class="page-header">
						<?php
						the_archive_title('<h1 class="page-title">', '</h1>');
						the_archive_description('<div class="archive-description">', '</div>');
						?>
					</header><!-- .page-header -->

					<?php
					while (have_posts()) :
						get_template_part('template-parts/content', 'tratamentos');
					endwhile; // End of the loop.

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</wrapper>
</section>

<?php
// get_sidebar();
get_footer();
