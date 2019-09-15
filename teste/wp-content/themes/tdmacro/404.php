<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package tdMacro
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found col-lg-12">
					<header class="page-header">
						<h4 class="meta-404">404</h4>
						<h1 class="page-title"><?php _e( 'Oops! A página não foi econtrada.', 'tdmacro' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'O que você estava procurando não foi encontrado. Talvez seja preciso realizar uma nova busca. Tente com a pesquisa abaixo.', 'tdmacro' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>