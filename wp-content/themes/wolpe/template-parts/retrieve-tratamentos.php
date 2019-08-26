<wrapper>
    <div class="retrieve-content">
    <?php if (the_post_thumbnail_url()){ ?><img src="<?= the_post_thumbnail_url() ?>" alt="Ansiedade Icon"><?php } ?>
        <p class="title"><?php the_title() ?></p>
        <p class="paragraph"><?= force_balance_tags(get_the_content()) ?></p>
    </div>
</wrapper>