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

$args_tratamentos = array(
	'post_type' => 'tratamentos',
	'order'    => 'ASC',
	'posts_per_page' => 6
);
$tratamentos = new WP_Query($args_tratamentos);
$args_cursos = array(
	'post_type' => 'cursos',
	'order'    => 'ASC',
	'posts_per_page' => 3
);
$cursos = new WP_Query($args_cursos);
$args_pots = array(
	'post_type' => 'blog',
	'order'    => 'ASC',
	'posts_per_page' => 3
);
$posts = new WP_Query($args_pots);
get_header();
?>
<section id="Intro">
	<div class="header-middle">
		<wrapper>
			<div class="header-middle-content">
				<img src="<?= get_template_directory_uri() ?>/images/logo-full.png" alt="logo Wolpe" class="logo">
				<p class="title"><?php the_field('titulo_banner') ?></p>
				<p class="paragraph"><?php the_field('conteudo_banner') ?> <a href="/quem-somos" class="saiba-mais">Saiba Mais <i class="fas fa-chevron-right"></i></a></p>
				<a href="#" class="button"><?php the_field('botao_banner') ?></a>
			</div>
			<img src="<?= get_template_directory_uri() ?>/images/image-header-min.png" class="image-header" alt="Image Header">
		</wrapper>
	</div>
</section>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="Entenda">
			<wrapper>
				<p class="title"><?php the_field('titulo_sessao_ajuda') ?></p>
				<p class="paragraph"><?php the_field('conteudo_sessao_ajuda') ?> <a href="/entenda" class="saiba-mais">Saiba Mais <i class="fas fa-chevron-right"></i></a></p>
			</wrapper>
		</section>
		<section id="Tratamentos">
			<wrapper>
				<p class="title">Tratamentos</p>
				<div class="cards">
					<?php if ($tratamentos->have_posts()) : while ($tratamentos->have_posts()) : $tratamentos->the_post();
							get_template_part('template-parts/content', 'tratamentos');
						endwhile;
					endif; ?>
				</div>
				<a href="<?= get_post_type_archive_link('tratamentos') ?>" class="button">Ver todos</a>
			</wrapper>
		</section>
		<section id="Cursos">
			<wrapper>
				<p class="title">Cursos</p>
				<div class="cards">
					<?php if ($cursos->have_posts()) : while ($cursos->have_posts()) : $cursos->the_post();
							get_template_part('template-parts/content', 'cursos');
						endwhile;
					endif; ?>
				</div>
				<a href="<?= get_post_type_archive_link('cursos') ?>" class="button">Ver todos</a>
			</wrapper>
		</section>
		<section id="Artigos">
			<wrapper>
				<p class="title">Blog</p>
				<div class="cards">
					<?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();
							get_template_part('template-parts/content', 'blog');
						endwhile;
					endif; ?>
				</div>
				<a href="/blog" class="button">Ver todos</a>
			</wrapper>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
