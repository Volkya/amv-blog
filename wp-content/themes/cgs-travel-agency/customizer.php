<?php
function cgs_travel_agency_customize_register( $wp_customize ) {
	/** Color Section **/

	/* Link Color */
	$wp_customize->add_setting( 'cgs_travel_agency_link_color', array(
		'default'   => '#ed4441',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_travel_agency_link_color',array(
				'label' => __('Link color', 'cgs-travel-agency'),
				'section' => 'colors',
				'settings' => 'cgs_travel_agency_link_color',
				'priority' => 1,
			)
		)
	);

	/* Button Color */
	$wp_customize->add_setting( 'cgs_travel_agency_button_color', array(
		'default'   => '#ed4441',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_travel_agency_button_color',array(
				'label' => __('Button background color', 'cgs-travel-agency'),
				'section' => 'colors',
				'settings' => 'cgs_travel_agency_button_color',
				'priority' => 1,
			)
		)
	);

	/* H1 Color */
	$wp_customize->add_setting( 'cgs_travel_agency_h1_color', array(
		'default'   => '#222222',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_travel_agency_h1_color',array(
				'label' => __('H1 Tag Color', 'cgs-travel-agency'),
				'section' => 'colors',
				'settings' => 'cgs_travel_agency_h1_color',
				'priority' => 1,
			)
		)
	);

	/* H2 Color */
	$wp_customize->add_setting( 'cgs_travel_agency_h2_color', array(
		'default'   => '#222222',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_travel_agency_h2_color',array(
				'label' => __('H2 Tag Color', 'cgs-travel-agency'),
				'section' => 'colors',
				'settings' => 'cgs_travel_agency_h2_color',
				'priority' => 1,
			)
		)
	);

	/* H3 Color */
	$wp_customize->add_setting( 'cgs_travel_agency_h3_color', array(
		'default'   => '#222222',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_travel_agency_h3_color',array(
				'label' => __('H3 Tag Color', 'cgs-travel-agency'),
				'section' => 'colors',
				'settings' => 'cgs_travel_agency_h3_color',
				'priority' => 1,
			)
		)
	);

	/* H4 Color */
	$wp_customize->add_setting( 'cgs_travel_agency_h4_color', array(
		'default'   => '#222222',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_travel_agency_h4_color',array(
				'label' => __('H4 Tag Color', 'cgs-travel-agency'),
				'section' => 'colors',
				'settings' => 'cgs_travel_agency_h4_color',
				'priority' => 1,
			)
		)
	);

	/* p tag Color */
	$wp_customize->add_setting( 'cgs_travel_agency_p_color', array(
		'default'   => '#000066',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_travel_agency_p_color',array(
				'label' => __('P Tag Color', 'cgs-travel-agency'),
				'section' => 'colors',
				'settings' => 'cgs_travel_agency_p_color',
				'priority' => 1,
			)
		)
	);

    /* Banner Section */

    $wp_customize->add_section('cgs_travel_agency_text_on_banner', array(
        'title' => 'Header Image Text',
        'priority' => 60
    ));

    $wp_customize->add_setting( 'cgs_travel_agency_setting_h1_text', array(
        'sanitize_callback'  => 'sanitize_text_field',
        'default' => esc_html__('Explore the world', 'cgs-travel-agency')
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,'cgs_travel_agency_setting_h1_text',array(
                'label' => __('Header text on banner', 'cgs-travel-agency'),
                'section' => 'cgs_travel_agency_text_on_banner',
                'settings' => 'cgs_travel_agency_setting_h1_text',
                'type' => 'text',
                'priority' => 1
            )
        )
    );

    $wp_customize->add_setting( 'cgs_travel_agency_setting_p_text', array(
        'sanitize_callback'  => 'sanitize_textarea_field',
        'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur arcu non interdum ultricies. Etiam nec ante nisl.', 'cgs-travel-agency')
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,'cgs_travel_agency_setting_p_text',array(
                'label' => __('Header text on banner', 'cgs-travel-agency'),
                'section' => 'cgs_travel_agency_text_on_banner',
                'settings' => 'cgs_travel_agency_setting_p_text',
                'type' => 'textarea',
                'priority' => 1,
            )
        )
    );
}
add_action( 'customize_register', 'cgs_travel_agency_customize_register' );
