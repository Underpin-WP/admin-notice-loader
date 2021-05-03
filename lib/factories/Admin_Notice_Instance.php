<?php
/**
 * Admin Notice Factory
 *
 * @since   1.0.0
 * @package Underpin\Abstracts
 */


namespace Underpin_Admin_Notices\Factories;


use Underpin\Traits\Instance_Setter;
use Underpin_Admin_Notices\Abstracts\Admin_Notice;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Admin_Notices_Instance
 * Handles creating custom admin bar menus
 *
 * @since   1.0.0
 * @package Underpin\Abstracts
 */
class Admin_Notice_Instance extends Admin_Notice {

	use Instance_Setter;

	protected $should_display_callback = '';

	public function __construct( $args = [] ) {
		// Override default params.
		$this->set_values( $args );
	}

	public function should_display() {
		return $this->set_callable( $this->should_display_callback );
	}

}