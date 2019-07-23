<?php

$args_tratamentos = array(
    'post_type' => 'tratamentos',
    'order'    => 'ASC'
);
$tratamentos = new WP_Query($args_tratamentos);
$args_cursos = array(
    'post_type' => 'cursos',
    'order'    => 'ASC'
);
$cursos = new WP_Query($args_cursos);
$args = array(
    'numberposts' => 3
);

$posts = get_posts($args);
?>
<section id="Entenda">
    <wrapper>
        <p class="title"><?php the_field('titulo_sessao_ajuda') ?></p>
        <p class="paragraph"><?php the_field('conteudo_sessao_ajuda') ?> <a href="#" class="saiba-mais">Saiba Mais <i class="fas fa-chevron-right"></i></a></p>
    </wrapper>
</section>
<section id="Tratamentos">
    <wrapper>
        <p class="title">Tratamentos</p>
        <div class="cards">
            <?php if ($tratamentos->have_posts()) : ?>
                <?php while ($tratamentos->have_posts()) : $tratamentos->the_post(); ?>
                    <div class="card">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="Ansiedade Icon">
                        <div class="card-content">
                            <p class="title"><?php the_title() ?></p>
                            <p class="paragraph"><?php the_content() ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
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
            <?php foreach ($posts as $post) : ?>
                <a href="<?php the_permalink() ?>" class="post">
                    <div class="card">
                        <img src="<?= the_post_thumbnail_url() ?>" alt="Blog Image">
                        <div class="card-content">
                            <p class="info"><?php echo get_the_date() ?> • <span><?php echo get_categories()[0]->name ?></span></p>
                            <p class="title"><?php the_title() ?></p>
                            <p class="paragraph"><?php the_excerpt() ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <a href="#" class="button">Ver todos</a>
    </wrapper>
</section>