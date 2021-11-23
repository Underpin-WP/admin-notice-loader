<?php

use Underpin\Abstracts\Underpin;
use Underpin\Factories\Observers\Loader;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'UNDERPIN_ADMIN_NOTICES_ROOT_DIR', __DIR__ );

// Add this loader.
Underpin::attach( 'setup', new Loader( 'admin_notices', [
	'instance' => 'Underpin\Admin_Notices\Abstracts\Admin_Notice',
	'default'  => 'Underpin\Admin_Notices\Factories\Admin_Notice_Instance',
] ) );