<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wolpe
 */
$object = get_post_type_object(get_post_type())->labels;
$section_name = $object->plural_name;
get_header();
?>

<section id="<?= $section_name ?>" class="intern-section">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<wrapper>
				<p class="title"><?= $section_name ?></p>
				<div class="cards">
					<?php
					if (have_posts()) :

						while (have_posts()) :
							the_post();
							get_template_part('template-parts/content', get_post_type());
						endwhile;

					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>
				</div>
			</wrapper>
		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php
// get_sidebar();
get_footer();
