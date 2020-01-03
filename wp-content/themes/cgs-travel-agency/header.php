<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="header-wrapper">
    <a class="skip-link screen-reader-text" href="#skip_content"><?php esc_html_e( 'Skip to content', 'cgs-travel-agency' ); ?></a>
    <nav class="navbar navbar-expand-lg navbar-light mainmenu" role="navigation">
        <div class="container">
            <a class="navbar-brand logo" href="<?php echo esc_url(get_home_url()); ?>">
                <?php
                if (display_header_text()==true){
                    echo '<h1>'.esc_html(get_bloginfo( 'name' )).'</h1>';
                    echo '<h2>'.esc_html(get_bloginfo('description')).'</h2>';
                } else {
                    $cgs_travel_agency_custom_logo_id = get_theme_mod( 'custom_logo' );
                    $cgs_travel_agency_logo = wp_get_attachment_image_src( $cgs_travel_agency_custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img src="'. esc_url( $cgs_travel_agency_logo[0] ) .'" alt="logo">';
                    }
                }
                ?>
            </a>
            <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#cgs_travel_agency_navmenu" aria-controls="cgs_travel_agency_navmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="cgs_travel_agency_navmenu">
            <?php
            wp_nav_menu([
                'theme_location'    => 'top',
                'menu_class'        => 'navbar-nav ml-auto topnav cgs-nav-main',
            ]);
            ?>
            </div>
        </div>
    </nav>
</div>
<?php if(is_home()){ ?>
<div class="banner-wrapper banner-wrapper-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <?php
                $cgs_travel_agency_h1_text = esc_html(get_theme_mod('cgs_travel_agency_setting_h1_text'));
                $cgs_travel_agency_p_text = esc_html(get_theme_mod('cgs_travel_agency_setting_p_text'));
                ?>
                <?php if(!empty($cgs_travel_agency_h1_text)){ ?>
                    <h1><?php echo esc_html(get_theme_mod('cgs_travel_agency_setting_h1_text')); ?></h1>
                <?php } ?>

	            <?php if(!empty($cgs_travel_agency_p_text)){ ?>
                    <p><?php echo esc_html(get_theme_mod('cgs_travel_agency_setting_p_text')); ?></p>
	            <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if(is_page() || is_search() || is_404()){ ?>
    <div class="inner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php if(is_archive() && !is_category()){ ?>
    <div class="inner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1>
	                    <?php if ( is_day() ) : ?>
		                    <?php /* translators: %s: string */ ?>
		                    <?php printf('<strong>'.esc_html_e('Daily Archives:', 'cgs-travel-agency').'</strong> %s', get_the_date() ); ?>
	                    <?php elseif ( is_month() ) : ?>
		                    <?php /* translators: %s: string */ ?>
		                    <?php printf('<strong>'.esc_html_e('Monthly Archives:', 'cgs-travel-agency').'</strong> %s', get_the_date( _x( 'F Y', 'monthly archives date format', 'cgs-travel-agency' ) )); ?>
	                    <?php elseif ( is_year() ) : ?>
		                    <?php /* translators: %s: string */ ?>
		                    <?php printf('<strong>'.esc_html_e('Yearly Archives:', 'cgs-travel-agency').'</strong> %s', get_the_date( _x( 'Y', 'yearly archives date format', 'cgs-travel-agency' ) )); ?>
	                    <?php else : ?>
		                    <?php esc_html_e( 'Blog Archives', 'cgs-travel-agency' ); ?>
	                    <?php endif; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php if(is_category()){ ?>
    <div class="inner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1>
	                    <?php esc_html_e('Category:', 'cgs-travel-agency'); ?> <?php single_cat_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div id="skip_content"></div>
