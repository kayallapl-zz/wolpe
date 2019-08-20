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
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<wrapper>
			<p class="title"><?= the_title() ?></p>
			<div class="container-galeria">

				<div id="gallery" style="display:none;">
					<?php
					$imgs = get_field('galeria');
					foreach ($imgs as $img) : ?>

					<img alt="Image 1 Title" src="<?= $img ?>" data-image="<?= $img ?>" data-description="Image 1 Description">


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
