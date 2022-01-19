<?php

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @ingroup Skins
 */
class SkinCavendish extends SkinTemplate {
	public $skinname = 'cavendish', $stylename = 'cavendish',
		$template = 'CavendishTemplate';

	/**
	 * @var Config
	 */
	private $config;

	public function __construct() {
		parent::__construct( ...func_get_args() );
		$this->config = ConfigFactory::getDefaultInstance()->makeConfig( 'cavendish' );
	}

	/**
	 * Override to pass our Config instance to it
	 */
	public function setupTemplate( $classname ) {
		return new $classname( $this->config );
	}
}
