<?php
add_action( 'customize_register', 'grupos2theme_customizer_settings' );
function grupos2theme_customizer_settings( $wp_customize ) {
	$themeroot = get_template_directory();


	$wp_customize->add_section( 'grupos2theme_nav' , array(
		'title'      => __('Navigation bar'),
		'priority'   => 30,
	) );

		/*[nav_logo]{{{*/
		$wp_customize->add_setting( 'nav_logo' , array(
			'default'     => "${themeroot}/imgs/nav_logo_grupos2_2016.png",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'nav_logo',
			array(
				'label'      => __( 'Upload a logo', 'grupos2theme' ),
				'section'    => 'grupos2theme_nav',
				'settings'   => 'nav_logo',
			)
		) );/*}}}*/

	$wp_customize->add_section( 'grupos2theme_header' , array(
		'title'      => __('Header do site'),
		'priority'   => 31,
	) );

		/*[header_bg]{{{*/
		$wp_customize->add_setting( 'header_bg' , array(
			'default'     => "${themeroot}/imgs/header_bg.png",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'header_bg',
			array(
				'label'      => __( 'Upload a background image', 'grupos2theme' ),
				'section'    => 'grupos2theme_header',
				'settings'   => 'header_bg',
			)
		) );/*}}}*/

	$wp_customize->add_section( 'grupos2theme_feeds' , array(
		'title'      => __('Pages feeds', "grupos2theme"),
		'priority'   => 32,
	) );

		/*[cases]{{{*/
		$wp_customize->add_setting( 'casesPageID' , array(
			'default'     => 0,
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'casesPageIDControl', array(
			'label' => __( 'Select a page to feed front-page on section \'Cases\'', 'grupos2theme' ),
			'settings'   => 'casesPageID',
			'section' => 'grupos2theme_feeds',
			'type' => 'dropdown-pages',
		));/*}}}*/
		/*[clientes]{{{*/
		$wp_customize->add_setting( 'clientsPageID' , array(
			'default'     => 0,
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'cientsPageIDControl', array(
			'label' => __( 'Select a page to feed front-page on section \'Clientes\'', 'grupos2theme' ),
			'settings'   => 'clientsPageID',
			'section' => 'grupos2theme_feeds',
			'type' => 'dropdown-pages',
		));/*}}}*/
		/*[services]{{{*/
		$wp_customize->add_setting( 'servicesPageID' , array(
			'default'     => 0,
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'servicesPageIDControl', array(
			'label' => __( 'Select a page to feed page \'Services\'', 'grupos2theme' ),
			'settings'   => 'servicesPageID',
			'section' => 'grupos2theme_feeds',
			'type' => 'dropdown-pages',
		));/*}}}*/

	$wp_customize->add_section( 'grupos2theme_btns' , array(
		'title'      => __('Buttons', "grupos2theme"),
		'priority'   => 32,
	) );

		/*[consultor]{{{*/
		$wp_customize->add_setting( 'btnConsultorLink' , array(
			'default'     => "",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'btnConsultorLinkControl', array(
			'label' => __( 'Link of nav button', 'grupos2theme' ),
			'settings'   => 'btnConsultorLink',
			'section' => 'grupos2theme_btns',
			'type' => 'url',
		));/*}}}*/
		/*[orçamento]{{{*/
		$wp_customize->add_setting( 'btnOrçamentoLink' , array(
			'default'     => "",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'btnOrçamentoLinkControl', array(
			'label' => __( 'Link of the top banner button', 'grupos2theme' ),
			'settings'   => 'btnOrçamentoLink',
			'section' => 'grupos2theme_btns',
			'type' => 'url',
		));/*}}}*/
		/*[Avaliação]{{{*/
		$wp_customize->add_setting( 'btnAvaliaçãoLink' , array(
			'default'     => "",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'btnAvaliaçãoLinkControl', array(
			'label' => __( 'Link of the bottom banner button', 'grupos2theme' ),
			'settings'   => 'btnAvaliaçãoLink',
			'section' => 'grupos2theme_btns',
			'type' => 'url',
		));/*}}}*/
		/*[Facebook]{{{*/
		$wp_customize->add_setting( 'socialFacebookLink' , array(
			'default'     => "",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'socialFacebookLinkControl', array(
			'label' => __( 'Link of the facebook social button on the footer of the site', 'grupos2theme' ),
			'settings'   => 'socialFacebookLink',
			'section' => 'grupos2theme_btns',
			'type' => 'url',
		));/*}}}*/
}
