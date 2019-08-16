<img class="retrieve-header-image" src="<?= the_post_thumbnail_url() ?>" alt="Blog Image">
<wrapper>
    <div class="retrieve-content">
        <p class="title"><?php the_title() ?></p>
        <p class="info"><?php echo get_the_date() ?> • <span class="blog-categoria"><?php echo get_the_category()[0]->name ?></span></p>
        <p class="paragraph"><?php the_content() ?></p>
    </div>
</wrapper>