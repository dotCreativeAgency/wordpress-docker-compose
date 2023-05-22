<?php
/**
 * Omnipress Magazine: Block Patterns *
 *
 * @package omnipress-magazine
 * @since Omnipress Magazine 1.0.0
 */

add_action( 'init', 'remove_core_block_patterns', 9 );
/**
 * Removes core block patterns.
 *
 * @since Omnipress Magazine 1.0.0
 *
 * @return void
 */
function remove_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

/**
 * Registers block patterns and categories. *
 *
 * @since Omnipress Magazine 1.0.0
 */
function omnipress_magazine_register_block_patterns() {
	$block_pattern_categories = array(
		'omnipress-magazine' => array( 'label' => __( 'Omnipress Magazine', 'omnipress-magazine' ) ),
	);

	$block_pattern_categories = apply_filters( 'omnipress_magazine_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'omnipress_magazine_register_block_patterns', 8 );
