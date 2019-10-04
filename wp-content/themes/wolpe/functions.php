<?php

/**
 * wolpe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wolpe
 */

if (!function_exists('wolpe_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wolpe_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wolpe, use a find and replace
		 * to change 'wolpe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('wolpe', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'wolpe'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('wolpe_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'wolpe_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wolpe_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('wolpe_content_width', 640);
}
add_action('after_setup_theme', 'wolpe_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wolpe_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'wolpe'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'wolpe'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'wolpe_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wolpe_scripts()
{
	wp_enqueue_style('wolpe-style', get_stylesheet_uri());

	wp_enqueue_script('wolpe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('wolpe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wolpe_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


function create_cursos()
{

	register_post_type(
		'cursos',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Cursos'),
				'singular_name' => __('Curso'),
				'plural_name' => __('Cursos'),
			),
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'cursos'),
		)
	);
}
function create_tratamentos()
{

	register_post_type(
		'tratamentos',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Tratamentos'),
				'singular_name' => __('Tratamento'),
				'plural_name' => __('Tratamentos'),
			),
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'tratamentos'),
		)
	);
}
function create_equipe()
{

	register_post_type(
		'equipe',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Equipe'),
				'singular_name' => __('Membro'),
				'plural_name' => __('Equipe'),
			),
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'equipe'),
		)
	);
}
function create_blog()
{

	register_post_type(
		'artigos',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Artigos'),
				'singular_name' => __('Artigo'),
				'plural_name' => __('Artigos'),
			),
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'artigos'),
			'taxonomies' => array('category'),
		)
	);
}
add_action('init', 'create_cursos');
add_action('init', 'create_tratamentos');
add_action('init', 'create_equipe');
add_action('init', 'create_blog');

// Remove p tags from category description
// remove_filter('the_content', 'wpautop');
// remove_filter('the_excerpt', 'wpautop');

if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(array(
		'key' => 'group_5d22376e50ba4',
		'title' => 'home',
		'fields' => array(
			array(
				'key' => 'field_5d22377358414',
				'label' => 'Título banner principal',
				'name' => 'titulo_banner',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5d22383cb215d',
				'label' => 'Conteúdo banner principal',
				'name' => 'conteudo_banner',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_5d223924445d1',
				'label' => 'Conteúdo do botão do banner principal',
				'name' => 'botao_banner',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Marque uma Consulta',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5d2239843640a',
				'label' => 'Título sessão de procurando ajuda',
				'name' => 'titulo_sessao_ajuda',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Quando procurar ajuda?',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5d223a1887faf',
				'label' => 'Conteúdo sessão de procurando ajuda',
				'name' => 'conteudo_sessao_ajuda',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page',
					'operator' => '==',
					'value' => '58',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => '',
	));

endif;


function wpse_167441_reorder_calendar($query)
{
	if (!is_admin() && $query->is_main_query()) {

		if (is_post_type_archive('cursos') || is_post_type_archive('tratamentos') || is_post_type_archive('artigos')) {
			$query->set('orderby', 'date');
			$query->set('order', 'ASC');
		}
	}
}

add_action('pre_get_posts', 'wpse_167441_reorder_calendar');

add_action('admin_menu', 'remove_default_post_type');
function remove_default_post_type()
{
	remove_menu_page('edit.php');
}

function no_nopaging($query)
{
	if (is_post_type_archive()) {
		$query->set('nopaging', 1);
	}
}

add_action('parse_query', 'no_nopaging');
