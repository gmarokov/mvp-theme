<?php
/**
 * mvp Theme Customizer
 *
 * @package mvp
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mvp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	///$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'mvp_customize_register' );


/*******************************************
Color scheme
********************************************/
function wptutsplus_customize_register( $wp_customize ) {
	
	// add the section to contain the settings
	$wp_customize->add_section( 'textcolors' , array(
		'title' =>  'Color Scheme',
	) );
	// main color ( site title, h1, h2, h4. h6, widget headings, nav links, footer headings )
	$txtcolors[] = array(
		'slug'=>'color_scheme_1', 
		'default' => '#000',
		'label' => 'Main Color'
	);
	
	// secondary color ( site description, sidebar headings, h3, h5, nav links on hover )
	$txtcolors[] = array(
		'slug'=>'color_scheme_2', 
		'default' => '#666',
		'label' => 'Secondary Color'
	);
	
	// link color
	$txtcolors[] = array(
		'slug'=>'link_color', 
		'default' => '#008AB7',
		'label' => 'Link Color'
	);
	
	// link color ( hover, active )
	$txtcolors[] = array(
		'slug'=>'hover_link_color', 
		'default' => '#9e4059',
		'label' => 'Link Color (on hover)'
	);
	// add the settings and controls for each color
	foreach( $txtcolors as $txtcolor ) {
		
		// SETTINGS
		$wp_customize->add_setting(
			$txtcolor['slug'], array(
				'default' => $txtcolor['default'],
				'type' => 'option', 
				'capability' =>  'edit_theme_options'
			)
		);
		// CONTROLS
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$txtcolor['slug'], 
				array('label' => $txtcolor['label'], 
				'section' => 'textcolors',
				'settings' => $txtcolor['slug'])
			)
		);
			
	}

	/**************************************
	Solid background colors
	***************************************/
	// add the section to contain the settings
	$wp_customize->add_section( 'background' , array(
		'title' =>  'Solid Backgrounds',
	) );
	
	
	// add the setting for the header background
	$wp_customize->add_setting( 'header-background' );
	
	// add the control for the header background
	$wp_customize->add_control( 'header-background', array(
		'label'      => 'Add a solid background to the header?',
		'section'    => 'background',
		'settings'   => 'header-background',
		'type'       => 'radio',
		'choices'    => array(
			'header-background-off'   => 'no',
			'header-background-on'  => 'yes',
	) ) );
	
	
	// add the setting for the footer background
	$wp_customize->add_setting( 'footer-background' );
	
	// add the control for the footer background
	$wp_customize->add_control( 'footer-background', array(
		'label'      => 'Add a solid background to the footer?',
		'section'    => 'background',
		'settings'   => 'footer-background',
		'type'       => 'radio',
		'choices'    => array(
			'footer-background-off'   => 'no',
			'footer-background-on'  => 'yes',
			) 
		) 
	);
}
add_action( 'customize_register', 'wptutsplus_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mvp_customize_preview_js() {
	wp_enqueue_script( 'mvp_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mvp_customize_preview_js' );

function wptutsplus_customize_colors() {
	/**********************
	* Text colors
	**********************/
	// Background color
	$color_scheme_1 = get_option( 'color_scheme_1' );

	// Actions color
	$color_scheme_2 = get_option( 'color_scheme_2' );

	// Links color
	$link_color = get_option( 'link_color' );

	// Hover links color
	$hover_link_color = get_option( 'hover_link_color' );

	/****************************************
	styling
	****************************************/
	?>
	<style>
	/* Apply color scheme */
	
	/* Background color */
	.site-header,
	#wrapper.toggled #sidebar-wrapper {
		border-top: 10px solid <?php echo $color_scheme_1; ?>;
	} 
	
	.progress-bar,
	.hamburger.is-closed .hamb-top,
	.hamburger.is-closed .hamb-middle,
	.hamburger.is-closed .hamb-bottom {
		background-color: <?php echo $color_scheme_1; ?>;
	}
	.section .heading {
		border-bottom: 3px solid <?php echo $color_scheme_1; ?>;
	}
	.vertical-list h3 {
		color: <?php echo $color_scheme_1; ?>;
	}
	#site-title a, h1, h2, h2.page-title, h2.post-title, h2 a:link, h2 a:visited, .menu.main a:link, .menu.main a:visited, footer h3 { 
		color:  <?php echo $color_scheme_1; ?>; 
	}

	.fa-stack-2x {
		color: <?php echo $color_scheme_1; ?>;
	}
	
	/* Actions color */
	.btn-view-more,
	.nav-previous,
	.nav-next,
	.search-form input[type="submit"],
	.sidebar-nav li:hover,
	.sidebar-nav li:focus,
	.btn-primary  {
		background-color: <?php echo $color_scheme_2; ?>;
	}
	

	/* links color */
	a:link, a:visited { 
		color:  <?php echo $link_color; ?>; 
	}
	
	/* hover links color */
	a:hover, a:active {
		color:  <?php echo $hover_link_color; ?>; 
	}
	
	</style>
		
	<?php
}
add_action( 'wp_head', 'wptutsplus_customize_colors' );