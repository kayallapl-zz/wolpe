<img src="<?php the_post_thumbnail_url() ?>" alt="" class="retrieve-header-image">
<wrapper>
    <div class="retrieve-content">
        <p class="title"><?php the_title() ?></p>
        <p class="date"><?php echo get_the_date() ?></p>
        <p class="paragraph"><?php the_content() ?></p>
    </div>
</wrapper>