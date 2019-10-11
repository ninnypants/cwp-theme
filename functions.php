<?php

/**
 * Initialize and return theme object.
 *
 * @return \CWP\Theme
 */
function cwp_theme() {
	static $theme;

	if ( ! isset( $theme ) ) {
		$theme = new \CWP\Theme();
	}

	return $theme;
}
add_action( 'init', 'cwp_theme' );
