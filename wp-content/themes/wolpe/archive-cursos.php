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

<section id="Cursos" class="intern-section">
	<wrapper>
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php

			get_template_part( 'template-parts/content', 'cursos' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</wrapper>	
</section>

<?php
// get_sidebar();
get_footer();
