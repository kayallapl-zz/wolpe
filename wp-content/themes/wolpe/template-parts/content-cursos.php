<?php

$args_cursos = array(
    'post_type' => 'cursos',
    'order'    => 'ASC'
);
$cursos = new WP_Query($args_cursos);

?>

<div class="cards">
	<?php if ($cursos->have_posts()) : ?>
		<?php while ($cursos->have_posts()) : $cursos->the_post(); ?>
			<div class="card">
				<img src="<?php the_post_thumbnail_url() ?>" alt="">
				<p class="date"><?php echo get_the_date() ?></p>
				<p class="title"><?php the_title() ?></p>
				<a href="<?php the_permalink() ?>" class="saiba-mais">Saiba Mais <i class="fas fa-chevron-right"></i></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
