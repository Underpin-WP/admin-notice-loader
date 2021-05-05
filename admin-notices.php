<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $instance ) {
	if ( ! defined( 'UNDERPIN_ADMIN_MENU_ROOT_DIR' ) ) {
		define( 'UNDERPIN_ADMIN_NOTICES_ROOT_DIR', plugin_dir_path( __FILE__ ) );
	}
	require_once( UNDERPIN_ADMIN_NOTICES_ROOT_DIR . 'lib/abstracts/Admin_Notice.php' );
	require_once( UNDERPIN_ADMIN_NOTICES_ROOT_DIR . 'lib/factories/Admin_Notice_Instance.php' );
	$instance->loaders()->add( 'admin_notices', [
		'instance' => 'Underpin_Admin_Notices\Abstracts\Admin_Notice',
		'default'  => 'Underpin_Admin_Notices\Factories\Admin_Notice_Instance',
	] );
} );