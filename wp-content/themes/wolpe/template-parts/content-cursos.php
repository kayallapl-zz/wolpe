<div class="card">
	<img src="<?php the_post_thumbnail_url() ?>" alt="">
	<p class="date"><?php echo get_the_date() ?></p>
	<p class="title"><?php the_title() ?></p>
	<a href="<?php the_permalink() ?>" class="saiba-mais">Saiba Mais <i class="fas fa-chevron-right"></i></a>
</div>