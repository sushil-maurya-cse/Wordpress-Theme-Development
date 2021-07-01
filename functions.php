<?php
/* 
theme function file
 */
include_once('advanced-custom-fields-repeater-master/acf-repeater.php');

function mentor_theme_setup () {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_image_size ('home-featured', 1519, 850, array('center', 'center'));
    add_image_size ('single-post', 580, 272, array('center', 'center'));
    add_image_size ('portfolio-thumb', 636, 424, array('center', 'center'));
    add_image_size ('course-img', 414, 276, array('center', 'center'));
    add_image_size( 'single-post-thumbnail', 856, 407 );
    add_image_size( 'testimonial-image', 90, 90 );
    add_image_size( 'about-banner', 636, 477 );

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'mentor' )
    ) );
    
};
add_action('after_setup_theme', 'mentor_theme_setup');


function mentor_scripts(){
   wp_enqueue_style('style',get_stylesheet_uri(  ));
   wp_enqueue_style('bootstrap-icon',get_template_directory_uri(). '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
   wp_enqueue_style('bootstrap',get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css');
   wp_enqueue_style('aos',get_template_directory_uri(). '/assets/vendor/aos/aos.css');
   wp_enqueue_style('animate',get_template_directory_uri(). '/assets/vendor/animate.css/animate.min.css');
   wp_enqueue_style('boxicon',get_template_directory_uri(). '/assets/vendor/boxicons/css/boxicons.min.css');
   wp_enqueue_style('remixicons',get_template_directory_uri(). '/assets/vendor/remixicon/remixicon.css');
   wp_enqueue_style('swiper ',get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.css');
   wp_enqueue_style('flexslider ',get_template_directory_uri(). '/assets/css/flexslider.css');


    wp_enqueue_style( 'dashicons' ); 

   wp_register_script( 'purecounter', 'https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js', null, null, true );
   wp_enqueue_script('purecounter');
//    wp_enqueue_script('jquery');
   wp_enqueue_script('main-js', get_template_directory_uri(). '/assets/js/main.js');
   wp_enqueue_script('costom-js', get_template_directory_uri(). '/assets/js/custom.js');
   wp_enqueue_script('flexslider-js', get_template_directory_uri(). '/assets/js/jquery.flexslider-min.js');
   wp_enqueue_script('html2wp-swiper', get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.js');
   wp_enqueue_script('vendor-aos',get_template_directory_uri(). '/assets/vendor/aos/aos.js');
   wp_enqueue_script('bootstrap-bundle',get_template_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
   wp_enqueue_script('validate-js',get_template_directory_uri(). '/assets/vendor/php-email-form/validate.js');

   wp_enqueue_script('swiper-bundle',get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.js');
   

}
add_action('wp_enqueue_scripts','mentor_scripts');

$another_args = array(
    'default-color'      => '#fff',
    'default-image'      => '',
    'default-position-x' => 'right',
    'default-position-y' => 'top',
    'default-repeat'     => 'no-repeat',
);
add_theme_support( 'custom-background', $another_args );

function mentor_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'mentor' ),
        'id'            => 'footer-2',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'mentor' ),
        'id'            => 'footer-3',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3    >',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 4', 'mentor' ),
        'id'            => 'footer-4',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Copyright-Section', 'mentor' ),
        'id'            => 'copyright',
        'before_widget' => '
        ',
        'container_class'         => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'contact-map', 'mentor' ),
        'id'            => 'contact-map',
        'before_widget' => '<div data-aos="fade-up">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'mentor_widgets_init' );
require get_template_directory(  ). '/assets/inc/team.php';
require get_template_directory(  ). '/assets/inc/event.php';
require get_template_directory(  ). '/assets/inc/testimonial.php';
// C:\xampp\htdocs\youtube\wp-content\themes\mentor\advanced-custom-fields-repeater-master
//require get_template_directory(  ). '/advanced-custom-fields-repeater-master/acf-repeater.php';

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
function my_acf_admin_head() {
    ?>
    <style type="text/css">

        .acf-flexible-content .layout .acf-fc-layout-handle {
            /*background-color: #00B8E4;*/
            background-color: #202428;
            color: #eee;
        }
        .acf-field .acf-label label{
            background-color: #fff;
            color: #2EA2CC;
        }
        h2{
            font-size: 22px !important;
            color:#0473AA !important;
        }
        .btn-acf{
            border:2px solid #2EA2CC !important;
            width: 50% !important;

        }
        .acf-repeater.-row > table > tbody > tr > td,
        .acf-repeater.-block > table > tbody > tr > td {
            border-top: 2px solid #202428;
        }
        
        .acf-repeater .acf-row-handle {
            vertical-align: top !important;
            padding-top: 16px;
        }

        .acf-repeater .acf-row-handle span {
            font-size: 20px;
            font-weight: bold;
            color: #202428;
        }

        .imageUpload img {
            width: 75px;
        }

        .acf-repeater .acf-row-handle .acf-icon.-minus {
            top: 30px;
        }
        .acf_postbox {
            background-color: #0473AA;
            border-radius: 5px;
        }
        .acf_postbox input[type=text],
        .acf_postbox input[type=search],
        .acf_postbox input[type=radio],
        .acf_postbox input[type=tel],
        .acf_postbox input[type=time],
        .acf_postbox input[type=url],
        .acf_postbox input[type=week],
        .acf_postbox input[type=password],
        .acf_postbox input[type=checkbox],
        .acf_postbox input[type=color],
        .acf_postbox input[type=date],
        .acf_postbox input[type=datetime],
        .acf_postbox input[type=datetime-local],
        .acf_postbox input[type=email],
        .acf_postbox input[type=month],
        .acf_postbox input[type=number],
        .acf_postbox select,
        .acf_postbox textarea {
            border-radius: 5px;
        }

        .acf_postbox p.label {
            text-shadow: none;
        }

        .acf_postbox h2.hndle,
        .acf_postbox p.label label,
        .acf_postbox p.label,
        .acf_postbox .toggle-indicator {
            color: #ffffff;
        }

        /*---- Date Picker Style ----*/

        .ui-acf .ui-datepicker select.ui-datepicker-month,
        .ui-acf .ui-datepicker select.ui-datepicker-year {
            border-radius: 5px;
        }

        .ui-acf .ui-state-default{
            border: 1px solid #ffffff!important;
            background: none!important;
        }

        .ui-acf .ui-datepicker .ui-state-active, .ui-acf .ui-state-default:hover {
            background: #2EA2CC!important;
            color: #ffffff;
        }

        .ui-acf .ui-widget-header {
           background: #3e3e3e;
        }

        .ui-acf .ui-datepicker .ui-datepicker-buttonpane {
            background: #0473AA;
            border-top: none;
        }

        .ui-acf .ui-datepicker .ui-datepicker-buttonpane button {
            text-shadow: none;
            color: #ffffff;
            text-decoration: underline;
            border: none!important;
        }
    </style>
    <?php
    }

    add_action('acf/input/admin_head', 'my_acf_admin_head');


    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Contact details',
            'menu_title'	=> 'Contact-details',
            'parent_slug'	=> 'theme-general-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme-Copyright',
            'menu_title'	=> 'Copyright',
            'parent_slug'	=> 'theme-general-settings',
        ));
        
    }