<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wolpe
 */

get_header();
?>
<section>
	<div class="header-middle">
		<wrapper>
			<div class="header-middle-content">
				<img src="<?= get_template_directory_uri() ?>/images/logo-full.png" alt="logo Wolpe" class="logo">
				<p class="title">Psicoterapia Cognitivo-Comportamental</p>
				<p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eos necessitatibus dolores, voluptas nobis exercitationem voluptatibus ipsa eaque in illo rerum quas fuga earum reprehenderit cupiditate pariatur, labore esse dolor. <a href="#" class="saiba-mais">Saiba Mais <i class="fas fa-chevron-right"></i></a></p>
				<a href="#" class="button">Marque uma Consulta</a>
			</div>
			<img src="<?= get_template_directory_uri() ?>/images/image-header-min.png" class="image-header" alt="Image Header">
		</wrapper>
	</div>
</section>
<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		// if ( have_posts() ) :

		// 	if ( is_home() && ! is_front_page() ) :
		// 		
		?>
		<!-- <header> -->
		<!-- <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1> -->
		<!-- </header> -->
		<?php
		// 	endif;

		// 	/* Start the Loop */
		// 	while ( have_posts() ) :
		// 		the_post();

		// 		/*
		// 		 * Include the Post-Type-specific template for the content.
		// 		 * If you want to override this in a child theme, then include a file
		// 		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		// 		 */
		// 		get_template_part( 'template-parts/content', get_post_type() );

		// 	endwhile;

		// 	the_posts_navigation();

		// else :

		get_template_part('template-parts/content', 'home');

		// endif;
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
