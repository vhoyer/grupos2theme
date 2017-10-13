<?php
add_action( 'customize_register', 'grupos2theme_customizer_settings' );
function grupos2theme_customizer_settings( $wp_customize ) {
	$themeroot = get_template_directory();

	$wp_customize->remove_section('colors');

	/*[Pages feeds]{{{*/
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
	/*}}}*/

	/*[Buttons]{{{*/
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
			'label' => __( '[Facebook] Page link', 'grupos2theme' ),
			'settings'   => 'socialFacebookLink',
			'section' => 'grupos2theme_btns',
			'type' => 'url',
		));
		$wp_customize->add_setting( 'socialFacebookPage' , array(
			'default'     => "",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'socialFacebookPageControl', array(
			'label' => __( '[Facebook] Page name', 'grupos2theme' ),
			'settings'   => 'socialFacebookPage',
			'section' => 'grupos2theme_btns',
			'type' => 'text',
		)); /*}}}*/
		/*[LinkedIn]{{{*/
		$wp_customize->add_setting( 'socialLinkedinLink' , array(
			'default'     => "",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'socialLinkedinLinkControl', array(
			'label' => __( '[Linkedin] Page link', 'grupos2theme' ),
			'settings'   => 'socialLinkedinLink',
			'section' => 'grupos2theme_btns',
			'type' => 'url',
		));
		$wp_customize->add_setting( 'socialLinkedinPage' , array(
			'default'     => "",
			'transport'   => 'refresh',
		) );
		$wp_customize->add_control( 'socialLinkedinPageControl', array(
			'label' => __( '[Linkedin] Page name', 'grupos2theme' ),
			'settings'   => 'socialLinkedinPage',
			'section' => 'grupos2theme_btns',
			'type' => 'text',
		)); /*}}}*/
	/*}}}*/
}
