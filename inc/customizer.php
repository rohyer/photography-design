<?php

function mytheme_customize_register( $wp_customize ) {

    // $wp_customize->add_panel('contact', array(
    //     'title' => __('Contato'),
    //     'description' => __('Adicione informações de contato'),
    //     'priority' => 150,
    // ));
    
    // PÁGINA CONTATO
    $wp_customize->add_section(
        'section_contact', array(
        'title' => __( 'Contato', 'odin' ),
        'priority' => 201,
    ));

    $wp_customize->add_setting( 'email' );

    $wp_customize->add_control('email', array(
        'type' => 'email',
        'section' => 'section_contact',
        'label' => __('Insira seu e-mail', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('exemplo@email.com'),
        )
    ));

    $wp_customize->add_setting( 'telefone' );

    $wp_customize->add_control('telefone', array(
        'type' => 'text',
        'section' => 'section_contact',
        'label' => __('Insira seu telefone', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('(99) 9999-9999'),
        ),
    ));

    $wp_customize->add_setting( 'facebook' );

    $wp_customize->add_control('facebook', array(
        'type' => 'text',
        'section' => 'section_contact',
        'label' => __('Insira o link de seu facebook aqui', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('https://www.facebook.com/pagina/'),
        ),
    ));

    // FOOTER
    $wp_customize->add_section(
        'section_footer', array(
        'title' => __( 'Footer', 'odin' ),
        'priority' => 202,
    ));

    $wp_customize->add_setting( 'email_section' );

    $wp_customize->add_control('email_section', array(
        'type' => 'email',
        'section' => 'section_footer',
        'label' => __('Insira seu e-mail', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('exemplo@email.com'),
        )
    ));

    $wp_customize->add_setting( 'telefone_section' );

    $wp_customize->add_control('telefone_section', array(
        'type' => 'text',
        'section' => 'section_footer',
        'label' => __('Insira seu telefone', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('(99) 9999-9999'),
        ),
    ));

    $wp_customize->add_setting( 'contact_1_section_name' );

    $wp_customize->add_control('contact_1_section_name', array(
        'type' => 'text',
        'section' => 'section_footer',
        'label' => __('Insira o tipo de contato', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('Whatsapp'),
        ),
    ));

    $wp_customize->add_setting( 'contact_1_section' );

    $wp_customize->add_control('contact_1_section', array(
        'type' => 'text',
        'section' => 'section_footer',
        'label' => __('Insira o seu whatsapp', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('(99) 9999-9999'),
        ),
    ));

    $wp_customize->add_setting( 'contact_2_section_name' );

    $wp_customize->add_control('contact_2_section_name', array(
        'type' => 'text',
        'section' => 'section_footer',
        'label' => __('Insira o tipo de contato', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('Email'),
        ),
    ));

    $wp_customize->add_setting( 'contact_2_section' );

    $wp_customize->add_control('contact_2_section', array(
        'type' => 'email',
        'section' => 'section_footer',
        'label' => __('Insira o seu email', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('exemplo@email.com'),
        ),
    ));


    // WORK

    $wp_customize->add_section(
        'section_work', array(
        'title' => __( 'Work', 'odin' ),
        'priority' => 204,
    ));

    $wp_customize->add_setting( 'first_work_section' );

    $wp_customize->add_control('first_work_section', array(
        'type' => 'text',
        'section' => 'section_work',
        'label' => __('Insira o 1º tipo de trabalho', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('Fotografia'),
        )
    ));

    $wp_customize->add_setting( 'second_work_section' );

    $wp_customize->add_control('second_work_section', array(
        'type' => 'text',
        'section' => 'section_work',
        'label' => __('Insira o 2º tipo de trabalho', 'odin'),
        'input_attrs' => array(
            'placeholder' => __('Design'),
        )
    ));
}

add_action( 'customize_register', 'mytheme_customize_register');

?>