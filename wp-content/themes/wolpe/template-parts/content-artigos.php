<a href="<?php the_permalink() ?>" class="post">
    <div class="card">
        <img src="<?= the_post_thumbnail_url() ?>" alt="Artigos Image">
        <div class="card-content">
            <p class="info"><?php the_date() ?></p>
            <p class="title"><?php the_title() ?></p>
            <p class="paragraph"><?= wp_trim_words(get_the_content(), 15, '...') ?></p>
        </div>
    </div>
</a>