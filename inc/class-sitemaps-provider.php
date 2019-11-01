<?php

/**
 * Class Core_Sitemaps_Provider
 */
class Core_Sitemaps_Provider {
	/**
	 * Registry instance
	 *
	 * @var Core_Sitemaps_Registry
	 */
	public $registry;
	/**
	 * Post Type name
	 *
	 * @var string
	 */
	protected $post_type = '';

	/**
	 * Core_Sitemaps_Provider constructor.
	 */
	public function __construct() {
		$this->registry = Core_Sitemaps_Registry::instance();
	}
}
