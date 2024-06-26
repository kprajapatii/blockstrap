<?php
/**
 * Feature block patterns
 *
 * @package BlockStrap
 * @since 1.2.0
 */

/*
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'blockstrap-feature-sections',
		array( 'label' => esc_html__( 'Feature Sections', 'blockstrap' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	register_block_pattern(
		'blockstrap/feature-home-default',
		array(
			'title'      => esc_html__( 'Hero home', 'blockstrap' ),
			'categories' => array( 'blockstrap-feature-sections' ),
			'content'    => defined( 'BLOCKSTRAP_BLOCKS_VERSION' ) ? apply_filters(
				'blockstrap_pattern_feature_home_default',
				''
			) : '<!-- wp:group {"tagName":"main"} -->
<main class="wp-block-group has-background"><!-- wp:paragraph -->
<p>' . __( 'BlockStrap is a lightweight and minimalist WordPress theme that was built specifically to work seamlessly with the BlockStrap page builder plugin.', 'blockstrap' ) . '</p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->',
		)
	);

}
