<img src="<?php the_post_thumbnail_url() ?>" alt="" class="retrieve-header-image">
<wrapper>
    <div class="retrieve-content">
        <p class="title"><?php the_title() ?></p>
        <p class="date"><?php the_field('data_do_curso') ?></p>
        <p class="paragraph"><?= force_balance_tags(get_the_content()) ?></p>
    </div>
</wrapper>