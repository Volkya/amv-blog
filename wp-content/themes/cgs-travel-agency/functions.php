<?php
/* ==========================================================================
 *  Theme settings
 * ========================================================================== */
if ( ! function_exists( 'cgs_travel_agency_setup' ) ) :
	function cgs_travel_agency_setup() {
		if ( ! isset( $content_width ) ) {
			$content_width = 725;
		}

		load_theme_textdomain( 'cgs-travel-agency', get_template_directory() . '/languages' );

		add_theme_support( 'woocommerce' );
		add_theme_support( 'bbpress' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'img_348_201', 348, 201, true );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
        add_theme_support( 'custom-background', apply_filters( 'cgs_travel_agency_custom_background_args', array( 'default-color' => 'ffffff' ) ) );
		add_theme_support( 'custom-header', array(
			'width'       => 1200,
			'height'      => 500,
			'flex-height' => true,
			'flex-width' => true,
		) );

		register_nav_menus( array(
			'top'    => __( 'Main Menu', 'cgs-travel-agency' )
		) );


		// logo
		$args = array();
		$lpos = esc_html(get_theme_mod( 'display_logo_and_title' ));
		if ( false === $lpos || 'image' == $lpos ) {
			$args['header-text'] = array( 'blog-name' );
		}
		add_theme_support( 'custom-logo', $args );
	}
endif;
add_action( 'after_setup_theme', 'cgs_travel_agency_setup' );

/* ==========================================================================
 *  Load scripts and styles
 * ========================================================================== */
if ( ! function_exists( 'cgs_travel_agency_enqueue_style_and_script' ) ) :
	function cgs_travel_agency_enqueue_style_and_script() {

		global $post, $wp_query;

		// STYLES
		wp_enqueue_style( 'cgs-travel-agency-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Oswald:300,400,600,700|Roboto:300,400,500,700', array(), true );
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css', array(), true );
		wp_enqueue_style( 'cgs-travel-agency-style', get_stylesheet_uri(), array(), true );

		// SCRIPTS
		wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.3', true );
		wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), true, true );

		if(is_singular()){
			if(comments_open() && get_option('thread_comments')){
				wp_enqueue_script( 'comment-reply', false, true, true );
			}
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'cgs_travel_agency_enqueue_style_and_script' );
/* =========================================================================== */
add_action( 'widgets_init', 'cgs_travel_agency_widgets_init' );
function cgs_travel_agency_widgets_init() {
	/* translators: %s: search term */
	register_sidebar( array(
		'name' => __('Primary Sidebar', 'cgs-travel-agency'),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget_box %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="side_title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'admin_init', 'cgs_travel_agency_add_editor_styles' );
function cgs_travel_agency_add_editor_styles() {
	add_editor_style('editor-style.css');
}
define('cgs_travel_agency_THEME_LINK','https://www.cgsthemes.com/product/free-travel-agency/');
define('cgs_travel_agency_SITE_NAME',get_bloginfo( 'name'));
function cgs_travel_agency_custom_css() {
	?>
    <style>
        <?php
        $cgs_travel_agency_header_bg_img = esc_url(get_header_image());
        if(!empty($cgs_travel_agency_header_bg_img)){
            echo esc_html(".banner-wrapper-bg{ background-image: linear-gradient(180deg,rgba(249,116,97,0.15) 0%,#f99889 100%), url(".esc_url($cgs_travel_agency_header_bg_img)."); }");
        }
        $cgs_travel_agency_link_color = get_theme_mod('cgs_travel_agency_link_color');
        if(!empty($cgs_travel_agency_link_color)){
            echo esc_html('a{color: '.esc_html($cgs_travel_agency_link_color).' !important;}');
        }
        $cgs_travel_agency_button_color = get_theme_mod('cgs_travel_agency_button_color');
        if(!empty($cgs_travel_agency_button_color)){
            echo esc_html('.btn-primary{background-color: '.esc_html($cgs_travel_agency_button_color).' !important; border-color: '.esc_html($cgs_travel_agency_button_color).' !important;}');
            echo esc_html('nav.pagination .page-numbers{background: '.esc_html($cgs_travel_agency_button_color).' !important;}');
            echo esc_html('a.wp-block-button__link{background-color: '.esc_html($cgs_travel_agency_button_color).' !important;     color: #FFF !important;}');
            echo esc_html('#respond .form-submit input[type=submit]{background-color: '.esc_html($cgs_travel_agency_button_color).' !important; border-color: '.esc_html($cgs_travel_agency_button_color).' !important;}');
        }

        $cgs_travel_agency_h1_color = get_theme_mod('cgs_travel_agency_h1_color');
        $cgs_travel_agency_h2_color = get_theme_mod('cgs_travel_agency_h2_color');
        $cgs_travel_agency_h3_color = get_theme_mod('cgs_travel_agency_h3_color');
        $cgs_travel_agency_h4_color = get_theme_mod('cgs_travel_agency_h4_color');
        $cgs_travel_agency_p_color = get_theme_mod('cgs_travel_agency_p_color');
        $cgs_travel_agency_background_color = get_theme_mod('background_color');
        $cgs_travel_agency_header_textcolor = get_theme_mod('header_textcolor');

        if(!empty($cgs_travel_agency_h1_color)){
            echo esc_html('h1{color: '.esc_html($cgs_travel_agency_h1_color).' !important;}');
        }
        if(!empty($cgs_travel_agency_h2_color)){
            echo esc_html('h2{color: '.esc_html($cgs_travel_agency_h2_color).' !important;}');
        }
        if(!empty($cgs_travel_agency_h3_color)){
            echo esc_html('h3{color: '.esc_html($cgs_travel_agency_h3_color).' !important;}');
        }
        if(!empty($cgs_travel_agency_h4_color)){
            echo esc_html('h4{color: '.esc_html($cgs_travel_agency_h4_color).' !important;}');
        }
        if(!empty($cgs_travel_agency_p_color)){
            echo esc_html('p{color: '.esc_html($cgs_travel_agency_p_color).' !important;} .post-content p, .search-results p, .main-content-wrapper p{color: '.esc_html($cgs_travel_agency_p_color).' !important;} .post-content li{color: '.esc_html($cgs_travel_agency_p_color).' !important;}');
        }
        if(!empty($cgs_travel_agency_background_color)){
            echo esc_html('.main-content-wrapper{background:#'.esc_html($cgs_travel_agency_background_color).' !important;}');
        }
        if(!empty($cgs_travel_agency_header_textcolor)){
            echo esc_html('h1{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h2{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h3{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h4{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h5{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h6{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h1 a{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h2 a{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h3 a{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h4 a{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h5 a{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;} h6 a{color: #'.esc_html($cgs_travel_agency_header_textcolor).' !important;}');
        }
        if (display_header_text()==true){
            echo esc_html('.header-wrapper ul.menu{padding: 10px 0 0 0};');
        }
        ?>
    </style>
	<?php
}
add_action('wp_head', 'cgs_travel_agency_custom_css');
/* =========================================================================== */
require_once( get_template_directory() . '/customizer.php' );

if ( ! function_exists( 'wp_body_open' ) ) {
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support WordPress versions prior to 5.2.0.
     */
    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' );
    }
}

