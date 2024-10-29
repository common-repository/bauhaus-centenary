<?php
/**
 * Block to celebrate the Bauhaus centenary.
 */

/**
 * Register the blocks.
 */
add_action( 'init', function() {
	register_block_type(
		'a8c/bauhaus-centenary',
		[
			'editor_script'   => 'a8c-bauhaus-centenary',
			'style'           => 'a8c-bauhaus-centenary',
			'editor_style'    => 'a8c-bauhaus-centenary-editor',
		]
	);

	wp_set_script_translations( 'a8c-bauhaus-centenary', 'bauhaus-centenary' );
} );
