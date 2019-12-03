<?php

function mytheme_customize_register( $wp_customize ) {

    // ============================================
    // =============== COMPANY NAME ===============
    $wp_customize->add_section(
        'section_company', array(
        'title' => __( 'Name company', 'odin' ),
        'priority' => 201,
    ));

    $wp_customize->add_setting( 'name_company' );
    $wp_customize->add_control('name_company', array(
        'type' => 'text',
        'section' => 'section_company',
        'label' => __('Enter your name or the name of your company', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('Arts & Photograpy'),
        )
    ));


    // ========================================
    // =============== ABOUT US ===============
    $wp_customize->add_section(
        'section_about_us', array(
            'title' => __( 'About us', 'odin'),
            'priority' => 202
        )
    );

    $wp_customize->add_setting( 'about_us' );
    $wp_customize->add_control('about_us', array(
        'type' => 'textarea',
        'section' => 'section_about_us',
        'label' => __( 'Enter text about you or your company', 'odin' ),
        'input_attrs' => array(
            'placeholder' => __('We are the...'),
        )
    ));


    // ====================================
    // =============== WORK ===============
    $wp_customize->add_section(
        'section_work', array(
        'title' => __( 'Work', 'odin' ),
        'priority' => 204,
    ));

    $wp_customize->add_setting( 'first_work_section' );
    $wp_customize->add_control('first_work_section', array(
        'type' => 'text',
        'section' => 'section_work',
        'label' => __('Enter your first type of work', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('Photograpy'),
        )
    ));

    $wp_customize->add_setting( 'second_work_section' );
    $wp_customize->add_control('second_work_section', array(
        'type' => 'text',
        'section' => 'section_work',
        'label' => __('Enter your second type of work', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('Design'),
        )
    ));


    // =======================================
    // =============== CONTACT ===============
    $wp_customize->add_section(
        'section_contact', array(
        'title' => __( 'Contact', 'odin' ),
        'priority' => 203,
    ));

    $wp_customize->add_setting( 'location_street_section' );
    $wp_customize->add_control('location_street_section', array(
        'type' => 'text',
        'section' => 'section_contact',
        'label' => __('Enter your location', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('Street Abraham Lincoln 122'),
        ),
    ));

    $wp_customize->add_setting( 'location_country_section' );
    $wp_customize->add_control('location_country_section', array(
        'type' => 'text',
        'section' => 'section_contact',
        'label' => __('Enter your state and country', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('NY - EUA'),
        ),
    ));

    $wp_customize->add_setting( 'email' );
    $wp_customize->add_control('email', array(
        'type' => 'email',
        'section' => 'section_contact',
        'label' => __( 'Enter your email', 'odin' ),
        'input_attrs' => array(
            'placeholder' => __( 'exemplo@email.com' ),
        )
    ));

    $wp_customize->add_setting( 'telefone' );
    $wp_customize->add_control('telefone', array(
        'type' => 'text',
        'section' => 'section_contact',
        'label' => __('Enter your telephone', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('(99) 9999-9999'),
        ),
    ));

    $wp_customize->add_setting( 'whatsapp' );
    $wp_customize->add_control('whatsapp', array(
        'type' => 'text',
        'section' => 'section_contact',
        'label' => __('Enter your whatsapp', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('(99) 9999-9999'),
        ),
    ));

    $wp_customize->add_setting('hide_contact_whatsapp', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hide_contact_whatsapp', array(
        'type' => 'checkbox',
        'section' => 'section_contact',
        'label' => __('Show whatsapp on contact section?')
    ));

    $wp_customize->add_setting('hide_footer_whatsapp', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hide_footer_whatsapp', array(
        'type' => 'checkbox',
        'section' => 'section_contact',
        'label' => __('Show whatsapp on footer section?')
    ));

    // =============================================
    // =============== SOCIAL MEDIAS ===============
    $wp_customize->add_section(
        'section_social_media', array(
        'title' => __( 'Social media', 'odin' ),
        'priority' => 203,
    ));

    $wp_customize->add_setting( 'facebook' );
    $wp_customize->add_control('facebook', array(
        'type' => 'text',
        'section' => 'section_social_media',
        'label' => __('Enter the link of your facebook', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('https://www.facebook.com/pagina/'),
        ),
    ));

    $wp_customize->add_setting( 'instagram' );
    $wp_customize->add_control('instagram', array(
        'type' => 'text',
        'section' => 'section_social_media',
        'label' => __('Enter the link of your instagram', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('https://www.instagram.com/pagina/'),
        ),
    ));

    $wp_customize->add_setting( 'linkedin' );
    $wp_customize->add_control('linkedin', array(
        'type' => 'text',
        'section' => 'section_social_media',
        'label' => __('Enter the link of your linkedin', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('https://www.linkedin.com/pagina/'),
        ),
    ));

    $wp_customize->add_setting( 'twitter' );
    $wp_customize->add_control('twitter', array(
        'type' => 'text',
        'section' => 'section_social_media',
        'label' => __('Enter the link of your twitter', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('https://www.twitter.com/pagina/'),
        ),
    ));

}

add_action( 'customize_register', 'mytheme_customize_register' );

?>