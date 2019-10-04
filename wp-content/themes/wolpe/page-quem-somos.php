<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wolpe
 */

$args_equipe = array(
	'post_type' => 'equipe',
	'order'    => 'ASC'
);
$equipe = new WP_Query($args_equipe);
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section id="QuemSomos" class="intern-section">
			<wrapper>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php
						the_post();
						the_content();
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

			</wrapper>
		</section>

		<section id="Equipe" class="intern-section">
			<wrapper>
				<p class="title">Equipe</p>
				<div class="cards">
					<?php if ($equipe->have_posts()) : ?>
					<?php while ($equipe->have_posts()) : $equipe->the_post(); ?>
					<div class="card">
						<img src="<?php the_post_thumbnail_url() ?>" alt="Foto de <?php the_title() ?>">
						<div class="card-content">
							<p class="title"><?php the_title() ?></p>
							<p class="paragraph"><?= force_balance_tags(get_the_content()) ?></p>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</wrapper>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
