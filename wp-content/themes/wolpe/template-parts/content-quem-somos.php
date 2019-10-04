<?php

$args_equipe = array(
    'post_type' => 'equipe',
    'order'    => 'ASC'
);
$equipe = new WP_Query($args_equipe);

?>

<section id="QuemSomos" class="intern-section">
	<wrapper>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
	
			<?php wolpe_post_thumbnail(); ?>
	
			<div class="entry-content">
				<?php
				the_content();
	
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wolpe' ),
					'after'  => '</div>',
				) );
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
					<p class="paragraph"><?php the_content() ?></p>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</wrapper>
</section>