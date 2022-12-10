<?php

// Register menu
function register_menus() { 
    register_nav_menu('main-menu',__('Main Menu')); 
} 
add_action('init', 'register_menus');

// Enqueue style and scripts
function add_themescripts() {

wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
wp_register_script( 'menuscripts', get_template_directory_uri() . '/js/scripts.js');
wp_enqueue_script( 'menuscripts', get_template_directory_uri() . '/js/scripts.js');

}
add_action('wp_enqueue_scripts', 'add_themescripts'); 

// Register sidebar
function rddesign_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'rddesign' ),
		'id'            => 'primary',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'rddesign_widgets_init' );

// Custom post type for Projects

function custom_projects_item() {
    $labels = array(
          'name' => _x( 'Projects', 'post type
 general name' ),
          'singular_name' => _x( 'Project', 'post type
 singular name' ),
          'menu_name' => 'Projects'
 );
    $args = array(
    'labels' => $labels,
    'description' => 'Holds our custom project items',
    'public' => true,
    'menu_position' => 5,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'has_archive' => true,
    'hierarchical' => false,
    );
    register_post_type( 'showcase', $args );
 }
 add_action( 'init', 'custom_projects_item' );

 // Custom taxonomies for Projects
function create_projects_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Design Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Design Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Design Types' ),
    'all_items' => __( 'All Design Types' ),
    'parent_item' => __( 'Parent Design Type' ),
    'parent_item_colon' => __( 'Parent Design Type:' ),
    'edit_item' => __( 'Edit Design Type' ),
    'update_item' => __( 'Update Design Type' ),
    'add_new_item' => __( 'Add New Design Type' ),
    'new_item_name' => __( 'New Design Type Name' ),
    'menu_name' => __( 'Design Types' ),
  );    
 
// Register the taxonomy
  register_taxonomy('design-type',array('showcase'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'design-type' ),
  ));
}

add_action( 'init', 'create_projects_hierarchical_taxonomy', 0 );

// Customisations
function register_custom_customizer( $wp_customize) {

// Section
$wp_customize->add_section( 'rd_design', array(
  'title'      => __( 'Edit Homepage Content', 'rddesign' ),
  'priority'   => 30,
) );

// Add Logo
$wp_customize->add_setting( 'logo_image', array(
  'default'   => '',
  'transport' => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-setting', array(
'label'      => __( 'Logo', 'rddesign' ),
'description' => 'Change logo',
'section'    => 'rd_design',
'settings'   => 'logo_image',
)) );

// Hero Heading
$wp_customize->add_setting( 'hero_heading', array(
  'default'   => '',
  'transport' => 'refresh',
) );

$wp_customize->add_control( 'heroheading-setting', array(
'label'      => __( 'Hero Heading', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'hero_heading',
'type'       => 'text',
) );

// Hero Image
$wp_customize->add_setting( 'hero_image', array(
  'default'   => '',
  'transport' => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'heroimage-setting', array(
'label'      => __( 'Hero Image', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'hero_image',
)) );

// Intro Heading
$wp_customize->add_setting( 'intro_heading', array(
  'default'   => '',
  'transport' => 'refresh',
) );

$wp_customize->add_control( 'introheading-setting', array(
'label'      => __( 'Intro Heading', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'intro_heading',
'type'       => 'text',
) );

// Intro Text
$wp_customize->add_setting( 'intro_text', array(
  'default'   => '',
  'transport' => 'refresh',
) );

$wp_customize->add_control( 'introtext-setting', array(
'label'      => __( 'Intro Paragraph', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'intro_text',
'type'       => 'textarea',
) );

// Intro Image
$wp_customize->add_setting( 'intro_image', array(
  'default'   => '',
  'transport' => 'refresh',
) );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'introimage-setting', array(
'label'      => __( 'Intro Image', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'intro_image',
)) );

// Services Home 1 Image
$wp_customize->add_setting( 'service1_image', array(
  'default'   => '',
  'transport' => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'service1image-setting', array(
'label'      => __( 'Service 1 Image', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'service1_image',
)) );

// Services Home 1 Title
$wp_customize->add_setting( 'service1_text', array(
  'default'   => '',
  'transport' => 'refresh',
) );


$wp_customize->add_control( 'service1text-setting', array(
'label'      => __( 'Service 1 Title', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'service1_text',
'type'       => 'text',
) );

// Services Home 2 Image
$wp_customize->add_setting( 'service2_image', array(
  'default'   => '',
  'transport' => 'refresh',
) );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'service2image-setting', array(
'label'      => __( 'Service 2 Image', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'service2_image',
)) );

// Services Home 2 Title
$wp_customize->add_setting( 'service2_text', array(
  'default'   => '',
  'transport' => 'refresh',
) );


$wp_customize->add_control( 'service2text-setting', array(
'label'      => __( 'Service 2 Title', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'service2_text',
'type'       => 'text',
) );

// Services Home 3 Image
$wp_customize->add_setting( 'service3_image', array(
  'default'   => '',
  'transport' => 'refresh',
) );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'service3image-setting', array(
'label'      => __( 'Service 3 Image', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'service3_image',
)) );

// Services Home 3 Title
$wp_customize->add_setting( 'service3_text', array(
  'default'   => '',
  'transport' => 'refresh',
) );


$wp_customize->add_control( 'service3text-setting', array(
'label'      => __( 'Service 3 Title', 'rddesign' ),
'description' => '',
'section'    => 'rd_design',
'settings'   => 'service3_text',
'type'       => 'text',
) );
}

// Colours
function customise_colours( $wp_customize) {

// Section
$wp_customize->add_section( 'custom_colours', array(
  'title'      => __( 'Edit Colours', 'rddesign' ),
  'priority'   => 30,
) );

/* Body background */
$wp_customize->add_setting("body_bg_colour", array(
  "default" => "#f6f6f5"
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'body_bg_colour', array(
  'label' => 'Body background colour',
  'description' => '',
  'section' => 'custom_colours',
  'settings' => 'body_bg_colour'
)));

/* Body text */
$wp_customize->add_setting("body_text_colour", array(
  "default" => "#4D4D4D"
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'body_text_colour', array(
  'label' => 'Body text colour',
  'description' => '',
  'section' => 'custom_colours',
  'settings' => 'body_text_colour'
)));

/* Headings */
$wp_customize->add_setting("headings_text_colour", array(
  "default" => "#272727"
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'headings_text_colour', array(
  'label' => 'Headings text colour',
  'description' => '',
  'section' => 'custom_colours',
  'settings' => 'headings_text_colour'
)));

/* Primary background */
$wp_customize->add_setting("primary_bg_colour", array(
  "default" => "#73818B"
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'primary_bg_colour', array(
  'label' => 'Primary accent background colour',
  'description' => 'Background colour for Header, Footer, Breadcrumb and Hero Text',
  'section' => 'custom_colours',
  'settings' => 'primary_bg_colour'
)));

/* Primary text */
$wp_customize->add_setting("primary_text_colour", array(
  "default" => "#f6f6f5"
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'primary_text_colour', array(
  'label' => 'Text on top of primary accent background',
  'description' => '',
  'section' => 'custom_colours',
  'settings' => 'primary_text_colour'
)));

}

// Change colours based on customisations
function customize_colours() {

?>
<style type="text/css">
  
body {
  background: <?php echo get_theme_mod('body_bg_colour');?>;
}

p {
    color: <?php echo get_theme_mod('body_text_colour');?>;
}

h1, h2, h3, h4, .services__title {
  color: <?php echo get_theme_mod('headings_text_colour');?>;
}

.header, .mobNavLinks, footer, .hero__text-container, .breadcrumb, figure.wp-block-image.borderedimage::before {
  background: <?php echo get_theme_mod('primary_bg_colour');?>;
}

.header__logo p, .mobNavLinks a, #mobMenu, nav a, .hero__text-container, footer p, footer a, .footer-nav a, .breadcrumb, .breadcrumb a {
  color: <?php echo get_theme_mod('primary_text_colour');?>;
}

</style>
<?php }

// Change images based on customisations
function customize_css() {

?>
<style type="text/css">
.hero__image {
  background-image: url("<?php echo get_theme_mod('hero_image', './images/hero.jpg');?>");
}
.intro-box__image {
    background-image: url("<?php echo get_theme_mod('intro_image', './images/couch.jpg');?>");
}

</style>
<?php }

// Theme support for featured image
add_theme_support( 'post-thumbnails' );

// Add custom customizer options
add_action( 'customize_register', 'register_custom_customizer' );
add_action( 'customize_register', 'customise_colours' );

// Add custom CSS changes
add_action( 'wp_head', 'customize_css');
add_action( 'wp_head', 'customize_colours');
?>