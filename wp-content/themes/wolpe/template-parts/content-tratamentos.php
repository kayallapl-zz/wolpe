<div class="card">
	
	<?php if (is_front_page()){ ?>
		<a href="<?php the_permalink() ?>">
			<img src="<?php the_post_thumbnail_url() ?>" alt="Ansiedade Icon">
		</a>
	<?php } ?>
	
	<div class="card-content">
		<a href="<?php the_permalink() ?>">
			<p class="title"><?php the_title() ?></p>
		</a>
		<p class="paragraph"><?= wp_trim_words(get_the_content(), 15, '...') ?></p>
	</div>
</div>