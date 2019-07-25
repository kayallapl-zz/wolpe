<?php

$args_tratamentos = array(
    'post_type' => 'tratamentos',
    'order'    => 'ASC'
);
$tratamentos = new WP_Query($args_tratamentos);

?>

<div class="cards">
	<?php if ($tratamentos->have_posts()) : ?>
		<?php while ($tratamentos->have_posts()) : $tratamentos->the_post(); ?>
			<div class="card">
				<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
				<div class="card-content">
					<p class="title"><?php the_title() ?></p>
					<p class="paragraph"><?php the_content() ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
