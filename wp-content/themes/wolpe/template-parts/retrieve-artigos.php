<img class="retrieve-header-image" src="<?= the_post_thumbnail_url() ?>" alt="Artigos Image">
<wrapper>
    <div class="retrieve-content">
        <p class="title"><?php the_title() ?></p>
        <p class="info"><?php the_date() ?></p>
        <p class="paragraph"><?= force_balance_tags(get_the_content()) ?></p>
    </div>
</wrapper>
