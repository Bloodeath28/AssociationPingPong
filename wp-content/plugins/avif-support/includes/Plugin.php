<?php
namespace GPLSCore\GPLS_PLUGIN_AVFSTW;

defined( 'ABSPATH' ) || exit;

use GPLSCore\GPLS_PLUGIN_AVFSTW\Base;
use GPLSCore\GPLS_PLUGIN_AVFSTW\AvifSupport;
use function GPLSCore\GPLS_PLUGIN_AVFSTW\Pages\PagesBase\setup_pages;

/**
 * Plugin Class for Activation - Deactivation - Uninstall.
 */
class Plugin extends Base {

	/**
	 * Main Class Load.
	 *
	 * @return void
	 */
	public static function load() {
		AvifSupport::init();
		setup_pages();
	}

	/**
	 * Plugin is activated.
	 *
	 * @return void
	 */
	public static function activated() {
		// Activation Custom Code here...
	}

	/**
	 * Plugin is Deactivated.
	 *
	 * @return void
	 */
	public static function deactivated() {
		// Deactivation Custom Code here...
	}

	/**
	 * Plugin is Uninstalled.
	 *
	 * @return void
	 */
	public static function uninstalled() {
		// Uninstall Custom Code here...
	}
}
