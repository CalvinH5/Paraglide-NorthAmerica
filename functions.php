<?php
/**
 * Paraglide NorthAmerica functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Paraglide_NorthAmerica
 */

if ( ! function_exists( 'paraglidenorthamerica_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function paraglidenorthamerica_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Paraglide NorthAmerica, use a find and replace
	 * to change 'paraglidenorthamerica' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'paraglidenorthamerica', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'paraglidenorthamerica' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'paraglidenorthamerica_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'paraglidenorthamerica_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function paraglidenorthamerica_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'paraglidenorthamerica_content_width', 640 );
}
add_action( 'after_setup_theme', 'paraglidenorthamerica_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function paraglidenorthamerica_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'paraglidenorthamerica' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'paraglidenorthamerica_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function paraglidenorthamerica_scripts() {
	wp_enqueue_style( 'paraglidenorthamerica-style', get_stylesheet_uri() );

	wp_enqueue_script( 'paraglidenorthamerica-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'paraglidenorthamerica-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'paraglidenorthamerica_scripts' );



/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';






function customtheme_customize_register( $wp_customize ) {
/*=========================Header SECTION========================*/
$wp_customize->add_section('theme_logo', array(
    'title' => _('Logo'),
    'description'=> 'Edit Logo',
   ));
$wp_customize->add_setting('pna_logo', array(
   'default'=> '',
   ));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'pna_logo', array(
   'label' => _('Edit logo'),
   'section' => 'theme_logo',
   'settings' => 'pna_logo'
) ));
$wp_customize->add_setting('logo_width', array(
 'default'=> '',
));
$wp_customize->add_control('logo_width', array(
 'label' => _('Logo width'),
 'section' => 'theme_logo',
 'settings' => 'logo_width',
));
$wp_customize->add_setting('logo_height', array(
 'default'=> '',
));
$wp_customize->add_control('logo_height', array(
 'label' => _('Logo height'),
 'section' => 'theme_logo',
 'settings' => 'logo_height',
));
// $wp_customize->add_section('theme_header', array(
//     'title' => _('Top Section'),
//     'description'=> 'Edit head section',
//     'priority' => '1',
//     'active_callback' => 'is_front_page'
//    ));
// /*About title*/
//    $wp_customize->add_setting('header_title', array(
//     'default'=> 'Title',
//    ));
//    $wp_customize->add_control('header_title', array(
//     'label' => _('Header Title'),
//     'section' => 'theme_header',
//     'settings' => 'header_title'
//    ));
/*=========================ABOUT SECTION========================*/
$wp_customize->add_section('theme_about', array(
    'title' => _('About Section'),
    'description'=> 'Edit about section',
    'priority' => '1',
    'active_callback' => 'is_front_page'
   ));
/*About title*/
   $wp_customize->add_setting('about_us_title', array(
    'default'=> 'Title',
   ));
   $wp_customize->add_control('about_us_title', array(
    'label' => _('About Us Title'),
    'section' => 'theme_about',
    'settings' => 'about_us_title'
   ));
   /*About Content*/
   $wp_customize->add_setting('about_us_content', array(
    'default'=> 'Lorem ipsum',
   ));
   $wp_customize->add_control('about_us_content', array(
    'label' => _('About Us Text'),
    'section' => 'theme_about',
    'settings' => 'about_us_content',
    'type' => 'textarea',
   ));
   /*About Btn*/
   $wp_customize->add_setting('about_us_btn', array(
    'default'=> 'http://www.paraglidenorthamerica.com/index.php/contact-2/',
   ));
   $wp_customize->add_control('about_us_btn', array(
    'label' => _('About Us Hyperlink'),
    'section' => 'theme_about',
    'settings' => 'about_us_btn',
   ));
   $wp_customize->add_setting('about_us_btn_title', array(
    'default'=> 'Learn More',
   ));
   $wp_customize->add_control('about_us_btn_title', array(
    'label' => _('About Us Title'),
    'section' => 'theme_about',
    'settings' => 'about_us_btn_title',
   ));
   //image
   $wp_customize->add_setting('about_section_image', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_section_image', array(
      'label' => _('Edit About Image'),
      'section' => 'theme_about',
      'settings' => 'about_section_image'
   ) ));



   /*=========================Events SECTION========================*/
   $wp_customize->add_section('social_media', array(
      'title' => _('Event Section'),
      'priority' => '2',
      'active_callback' => 'is_front_page'
    ));
   $wp_customize->add_setting('events_info_background', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'events_info_background', array(
      'label' => _('Edit Events Image'),
      'section' => 'social_media',
      'settings' => 'events_info_background'
   ) ));





   /*=========================Shop SECTION========================*/
  $wp_customize->add_section('theme_shop', array(
    'title' => _('Shop Section'),
    'description'=> 'Edit Shop section',
    'priority' => '2',
    'active_callback' => 'is_front_page'
   ));

   /*Shop Tagline 1*/

     $wp_customize->add_setting('shop_tagline_1', array(
    'default'=> 'Shop Tagline 1',
   ));
   $wp_customize->add_control('shop_tagline_1', array(
    'label' => _('Shop Tagline 1'),
    'section' => 'theme_shop',
    'settings' => 'shop_tagline_1',
   ));

   /*Shop Tagline 2*/

     $wp_customize->add_setting('shop_tagline_2', array(
    'default'=> 'Shop Tagline 2',
   ));
   $wp_customize->add_control('shop_tagline_2', array(
    'label' => _('Shop Tagline 2'),
    'section' => 'theme_shop',
    'settings' => 'shop_tagline_2',
   ));
   /*Shop Btn*/

    $wp_customize->add_setting('shop_btn_title', array(
    'default'=> 'Shop Call to Action',
   ));
   $wp_customize->add_control('shop_btn_title', array(
    'label' => _('Shop Call to Action Title'),
    'section' => 'theme_shop',
    'settings' => 'shop_btn_title',
   ));

   $wp_customize->add_setting('shop_btn', array(
    'default'=> 'http://www.paraglidenorthamerica.com/index.php/products/',
   ));
   $wp_customize->add_control('shop_btn', array(
    'label' => _('Shop Hyperlink'),
    'section' => 'theme_shop',
    'settings' => 'shop_btn',
   ));

   /*Shop Tagline Background*/

   $wp_customize->add_setting('shop_tagline_background', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_tagline_background', array(
      'label' => _('Edit Shop Tagline Background '),
      'section' => 'theme_shop',
      'settings' => 'shop_tagline_background'
   ) ));

   /*Shop Images*/
   /*IMAGE 1*/
   $wp_customize->add_setting('shop_image1', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_image1', array(
      'label' => _('Edit Shop Image 1'),
      'section' => 'theme_shop',
      'settings' => 'shop_image1'
   ) ));
   $wp_customize->add_setting('brand_link1', array(
    'default'=> 'http://brandlinkhere.com/',
   ));
   $wp_customize->add_control('brand_link1', array(
    'label' => _('Image Hyperlink'),
    'section' => 'theme_shop',
    'settings' => 'brand_link1',
   ));
    $wp_customize->add_setting('shop_image_alt1', array(
    'default'=> 'image-alt',
   ));
   $wp_customize->add_control('shop_image_alt1', array(
    'label' => _('Image Alt'),
    'section' => 'theme_shop',
    'settings' => 'shop_image_alt1',
   ));
   /*IMAGE 2*/
   $wp_customize->add_setting('shop_image2', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_image2', array(
      'label' => _('Edit Shop Image 2'),
      'section' => 'theme_shop',
      'settings' => 'shop_image2'
   ) ));
   $wp_customize->add_setting('brand_link2', array(
    'default'=> 'http://brandlinkhere.com/',
   ));
   $wp_customize->add_control('brand_link2', array(
    'label' => _('Image Hyperlink'),
    'section' => 'theme_shop',
    'settings' => 'brand_link2',
   ));
   $wp_customize->add_setting('shop_image_alt2', array(
    'default'=> 'image-alt',
   ));
   $wp_customize->add_control('shop_image_alt2', array(
    'label' => _('Image Alt'),
    'section' => 'theme_shop',
    'settings' => 'shop_image_alt2',
   ));
   /*IMAGE 3*/
   $wp_customize->add_setting('shop_image3', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_image3', array(
      'label' => _('Edit Shop Image 3'),
      'section' => 'theme_shop',
      'settings' => 'shop_image3'
   ) ));
   $wp_customize->add_setting('brand_link3', array(
    'default'=> 'http://brandlinkhere.com/',
   ));
   $wp_customize->add_control('brand_link3', array(
    'label' => _('Image Hyperlink'),
    'section' => 'theme_shop',
    'settings' => 'brand_link3',
   ));
   $wp_customize->add_setting('shop_image_alt3', array(
    'default'=> 'image-alt',
   ));
   $wp_customize->add_control('shop_image_alt3', array(
    'label' => _('Image Alt'),
    'section' => 'theme_shop',
    'settings' => 'shop_image_alt3',
   ));
   /*IMAGE 4*/
   $wp_customize->add_setting('shop_image4', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_image4', array(
      'label' => _('Edit Shop Image 4'),
      'section' => 'theme_shop',
      'settings' => 'shop_image4'
   ) ));
   $wp_customize->add_setting('brand_link4', array(
    'default'=> 'http://brandlinkhere.com/',
   ));
   $wp_customize->add_control('brand_link4', array(
    'label' => _('Image Hyperlink'),
    'section' => 'theme_shop',
    'settings' => 'brand_link4',
   ));
   $wp_customize->add_setting('shop_image_alt4', array(
    'default'=> 'image-alt',
   ));
   $wp_customize->add_control('shop_image_alt4', array(
    'label' => _('Image Alt'),
    'section' => 'theme_shop',
    'settings' => 'shop_image_alt4',
   ));
   /*IMAGE 5*/
   $wp_customize->add_setting('shop_image5', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_image5', array(
      'label' => _('Edit Shop Image 5'),
      'section' => 'theme_shop',
      'settings' => 'shop_image5'
   ) ));
   $wp_customize->add_setting('brand_link5', array(
    'default'=> 'http://brandlinkhere.com/',
   ));
   $wp_customize->add_control('brand_link5', array(
    'label' => _('Image Hyperlink'),
    'section' => 'theme_shop',
    'settings' => 'brand_link5',
   ));
   $wp_customize->add_setting('shop_image_alt5', array(
    'default'=> 'image-alt',
   ));
   $wp_customize->add_control('shop_image_alt5', array(
    'label' => _('Image Alt'),
    'section' => 'theme_shop',
    'settings' => 'shop_image_alt5',
   ));
   /*IMAGE 6*/
   $wp_customize->add_setting('shop_image6', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_image6', array(
      'label' => _('Edit Shop Image 6'),
      'section' => 'theme_shop',
      'settings' => 'shop_image6'
   ) ));
   $wp_customize->add_setting('brand_link6', array(
    'default'=> 'http://brandlinkhere.com/',
   ));
   $wp_customize->add_control('brand_link6', array(
    'label' => _('Image Hyperlink'),
    'section' => 'theme_shop',
    'settings' => 'brand_link6',
   ));
   $wp_customize->add_setting('shop_image_alt6', array(
    'default'=> 'image-alt',
   ));
   $wp_customize->add_control('shop_image_alt6', array(
    'label' => _('Image Alt'),
    'section' => 'theme_shop',
    'settings' => 'shop_image_alt6',
   ));
   /*=========================Latest Videos========================*/
   $wp_customize->add_section('latest_videos', array(
    'title' => _('Community Videos'),
    'description'=> 'Edit video section',
    'priority'=> '3'
   ));
   /*Title*/
   $wp_customize->add_setting('latest_videos_title', array(
    'default'=> 'Latest Videos',
   ));
   $wp_customize->add_control('latest_videos_title', array(
    'label' => _('Latest Videos Title'),
    'section' => 'latest_videos',
    'settings' => 'latest_videos_title'
   ));
   /*Image*/
   $wp_customize->add_setting('videos_background_image', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'videos_background_image', array(
      'label' => _('Edit Background Image'),
      'section' => 'latest_videos',
      'settings' => 'videos_background_image'
   ) ));
   /*Btn*/
   /*$wp_customize->add_setting('latest_videos_btn', array(
    'default'=> '',
   ));
   $wp_customize->add_control('latest_videos_btn', array(
    'label' => _('Videos Hyperlink'),
    'section' => 'latest_videos',
    'settings' => 'latest_videos_btn',
   ));*/
/*=========================ABOUT TOM SECTION========================*/
$wp_customize->add_section('theme_tom', array(
    'title' => _('About Tom Section'),
    'description'=> 'Edit about Tom section',
    'priority' => '4',
    'active_callback' => 'is_front_page'
   ));
/*About title*/
   $wp_customize->add_setting('about_tom_title', array(
    'default'=> 'Title',
   ));
   $wp_customize->add_control('about_tom_title', array(
    'label' => _('About Tom Title'),
    'section' => 'theme_tom',
    'settings' => 'about_tom_title'
   ));
   /*About Content*/
   $wp_customize->add_setting('about_tom_content', array(
    'default'=> 'Lorem ipsum',
   ));
   $wp_customize->add_control('about_tom_content', array(
    'label' => _('About Tom Text'),
    'section' => 'theme_tom',
    'settings' => 'about_tom_content',
    'type' => 'textarea',
   ));
   /*About Btn*/
   $wp_customize->add_setting('about_tom_btn', array(
    'default'=> 'http://www.paraglidenorthamerica.com/index.php/contact-2/',
   ));
   $wp_customize->add_control('about_tom_btn', array(
    'label' => _('About Tom Hyperlink'),
    'section' => 'theme_tom',
    'settings' => 'about_tom_btn',
   ));

    $wp_customize->add_setting('about_tom_btn_title', array(
    'default'=> 'Call to Action Title',
   ));
   $wp_customize->add_control('about_tom_btn_title', array(
    'label' => _('Call to Action Title'),
    'section' => 'theme_tom',
    'settings' => 'about_tom_btn_title',
    'type' => 'text',
   ));


   //image
   $wp_customize->add_setting('about_tom_image', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_tom_image', array(
      'label' => _('Edit About Tom Image'),
      'section' => 'theme_tom',
      'settings' => 'about_tom_image'
   ) ));
   $wp_customize->add_setting('about_tom_image_size', array(
    'default'=> '400',
   ));
   $wp_customize->add_control('about_tom_image_size', array(
    'label' => _('About Tom Image height'),
    'section' => 'theme_tom',
    'settings' => 'about_tom_image_size'
   ));
   /*=========================CONTACT SECTION========================*/
$wp_customize->add_section('contact_section', array(
    'title' => _('Contact Section'),
    'description'=> 'Edit contact section',
    'priority' => '5',
    'active_callback' => 'is_front_page'
   ));
/*contact title*/
   $wp_customize->add_setting('contact_title', array(
    'default'=> 'Title',
   ));
   $wp_customize->add_control('contact_title', array(
    'label' => _('Contact Title'),
    'section' => 'contact_section',
    'settings' => 'contact_title'
   ));
   /*contact Content*/
   $wp_customize->add_setting('contact_content', array(
    'default'=> 'Lorem ipsum',
   ));
   $wp_customize->add_control('contact_content', array(
    'label' => _('Contact Text'),
    'section' => 'contact_section',
    'settings' => 'contact_content',
    'type' => 'textarea',
   ));
   /*contact Btn*/

    $wp_customize->add_setting('contact_btn_title', array(
    'default'=> 'Call To Action',
   ));
   $wp_customize->add_control('contact_btn_title', array(
    'label' => _('Contact Call To Action'),
    'section' => 'contact_section',
    'settings' => 'contact_btn_title',
   ));

   $wp_customize->add_setting('contact_btn', array(
    'default'=> 'http://www.paraglidenorthamerica.com/index.php/contact-2/',
   ));
   $wp_customize->add_control('contact_btn', array(
    'label' => _('Contact Hyperlink'),
    'section' => 'contact_section',
    'settings' => 'contact_btn',
   ));
   /*contact image*/
   $wp_customize->add_setting('contact_background_image', array(
      'default'=> '',
      ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_background_image', array(
      'label' => _('Edit Contact Background Image'),
      'section' => 'contact_section',
      'settings' => 'contact_background_image'
   ) ));
   /*=========================Copyright========================*/
   $wp_customize->add_section('theme_copyright', array(
    'title' => _('Copyright'),
    'description'=> 'Edit copyright section'
   ));
   $wp_customize->add_setting('copyright_details', array(
    'default'=> 'Copyright @copy; 2016 Paraglide NorthAmerica',
   ));
   $wp_customize->add_control('copyright_details', array(
    'label' => _('Copyright Information'),
    'section' => 'theme_copyright',
    'settings' => 'copyright_details'
   ));
}

add_action( 'customize_register', 'customtheme_customize_register' );

function customtheme_css_customize(){
?>
<style type="text/css">
	.about-us-content:first-child {
	 background-image: url("<?php echo get_theme_mod('about_section_image');?>");
	 background-size: cover;
	 background-repeat: no-repeat;
	 background-position: center center;
	 background-attachment: fixed;
	}
	
  /* .events-info {
    background-image: url("<?php echo get_theme_mod('events_info_background'); ?>");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  } */

	.pilot-service {
		background-image: url("<?php echo get_theme_mod('shop_tagline_background'); ?>");
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
	}

	.latest-videos{
	background-image: url("<?php echo get_theme_mod('videos_background_image');?>");
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: fixed;
	}

	.contact-us{
	background-image: url("<?php echo get_theme_mod('contact_background_image');?>");
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center no-repeat;
	background-attachment: fixed;
	}

	section #huge_it_videogallery{
	background-color: transparent !important;
	box-shadow: 0 0 0 !important;
	}
</style>
<?php
}
add_action('wp_head', 'customtheme_css_customize');
