<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wolpe
 */

get_header('galeria');
?>
<div id="primary" class="content-area intern-section">
	<main id="main" class="site-main">
		<wrapper>
			<p class="title"><?= the_title() ?></p>
			<div class="container-galeria">

				<div id="gallery" style="display:none;">
					<?php
					$imgs = get_field('galeria');
					foreach ($imgs as $img) : ?>


						 <?php if (substr($img, -3) == 'mp4'): ?>

					<img alt="Image 1 Title" src="http://consultoriowolpe.com.br/wp-content/uploads/2019/09/index.png"
						data-image="http://consultoriowolpe.com.br/wp-content/uploads/2019/09/index.png"
						data-type="html5video"
			            data-videomp4="<?= $img ?>">
					<?php else: ?>
						<img alt="Image 1 Title" src="<?= $img ?>" data-image="<?= $img ?>">
					<?php endif; ?>


					<?php endforeach; ?>
				</div>
			</div>
		</wrapper>

	</main><!-- #main -->
</div><!-- #primary -->


<script type="text/javascript">
	$(document).ready(function() {
		$("#gallery").unitegallery();
	});
</script>

<?php

// get_sidebar();
get_footer();
