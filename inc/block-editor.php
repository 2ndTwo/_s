<?php
/**
 * Configure block editor (Gutenberg)
 *
 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
 */
function _s_setup_block_editor() {
	/**
	 * Add support for custom colors
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
	 */
	add_theme_support( 'editor-color-palette', array(
	  array(
		'name' => __( 'Black', '_s' ),
		'slug' => 'black',
		'color' => '#000000',
	  ),
	  array(
		'name' => __( 'White', '_s' ),
		'slug' => 'white',
		'color' => '#ffffff',
	  ),
	) );

	/**
	 * Remove support for arbitrary colors
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-colors-in-block-color-palettes
	 */
	// add_theme_support( 'disable-custom-colors' );


	/**
	 * Add support for custom gradients (only for gradient-supporting blocks)
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-gradient-presets
	 */
	/*
	add_theme_support(
	  'editor-gradient-presets',
	  array(
		array(
		  'name'     => __( 'Vivid cyan blue to vivid purple', '_s' ),
		  'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)',
		  'slug'     => 'vivid-cyan-blue-to-vivid-purple'
		)
	  )
	);
	*/

	/**
	 * Remove support for arbitrary gradients
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-gradients
	 */
	// add_theme_support( 'disable-custom-gradients' );


	/*
	 * Add support for custom font sizes
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
	 */
	add_theme_support( 'editor-font-sizes', array(
	  array(
		'name' => __( 'Small', '_s' ),
		'size' => 14,
		'slug' => 'small'
	  ),
	  array(
		'name' => __( 'Regular', '_s' ),
		'size' => 18,
		'slug' => 'regular'
	  ),
	  array(
		'name' => __( 'Large', '_s' ),
		'size' => 32,
		'slug' => 'large'
	  ),
	  array(
		'name' => __( 'Huge', '_s' ),
		'size' => 62,
		'slug' => 'huge'
	  )
	) );

	/*
	 * Remove support for arbitrary font sizes
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-font-sizes
	 */
	// add_theme_support('disable-custom-font-sizes');


	/*
	 * Add default block styling
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
	 */
	add_theme_support( 'wp-block-styles' );

	/*
	 * Add support for custom block editor styles
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
	 */
	add_theme_support( 'editor-styles' );
	add_editor_style( 'dist/css/editor-style.css' );


	/*
	 * Add support for wide and full block alignments
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
	 */
	// add_theme_support( 'align-wide' );


	/*
	 * Add option for preserving the aspect ratio of embeds on smaller devices
	 *
	 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#responsive-embedded-content
	 */
	add_theme_support( 'responsive-embeds' );
}

add_action( 'after_setup_theme', '_s_setup_block_editor' );
