<?php

$args_tratamentos = array(
    'post_type' => 'tratamentos',
    'order'    => 'ASC',
    'posts_per_page' => 6
);
$tratamentos = new WP_Query($args_tratamentos);
$args_cursos = array(
    'post_type' => 'cursos',
    'order'    => 'ASC',
    'posts_per_page' => 3
);
$cursos = new WP_Query($args_cursos);
$args_pots = array(
    'post_type' => 'blog',
    'order'    => 'ASC',
    'posts_per_page' => 3
);
$posts = new WP_Query($args_pots);
?>
<section id="Entenda">
    <wrapper>
        <p class="title"><?php the_field('titulo_sessao_ajuda') ?></p>
        <p class="paragraph"><?php the_field('conteudo_sessao_ajuda') ?> <a href="/entenda" class="saiba-mais">Saiba Mais <i class="fas fa-chevron-right"></i></a></p>
    </wrapper>
</section>
<section id="Tratamentos">
    <wrapper>
        <p class="title">Tratamentos</p>
        <div class="cards">
            <?php if ($tratamentos->have_posts()) : ?>
                <?php while ($tratamentos->have_posts()) : $tratamentos->the_post(); ?>
                    <div class="card">
                        <a href="<?php the_permalink() ?>">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="Ansiedade Icon">
                        </a>
                        <div class="card-content">
                            <a href="<?php the_permalink() ?>">
                                <p class="title"><?php the_title() ?></p>
                            </a>
                            <p class="paragraph"><?= wp_trim_words(get_the_content(), 15, '...') ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <a href="<?= get_post_type_archive_link('tratamentos') ?>" class="button">Ver todos</a>
    </wrapper>
</section>
<section id="Cursos">
    <wrapper>
        <p class="title">Cursos</p>
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
        <a href="<?= get_post_type_archive_link('cursos') ?>" class="button">Ver todos</a>
    </wrapper>
</section>
<section id="Artigos">
    <wrapper>
        <p class="title">Blog</p>
        <div class="cards">
            <?php if ($posts->have_posts()) : ?>
                <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                    <a href="<?php the_permalink() ?>" class="post">
                        <div class="card">
                            <img src="<?= the_post_thumbnail_url() ?>" alt="Blog Image">
                            <div class="card-content">
                                <p class="info"><?php echo get_the_date() ?> • <span><?php echo get_the_category()[0]->name?></span></p>
                                <p class="title"><?php the_title() ?></p>
                                <p class="paragraph"><?= wp_trim_words(get_the_content(), 15, '...') ?></p>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <a href="/blog" class="button">Ver todos</a>
    </wrapper>
</section>