<?php

class SkinCavendish extends SkinTemplate {
	public $skinname = 'cavendish', $stylename = 'cavendish',
		$template = 'CavendishTemplate';

	/**
	 * @var Config
	 */
	private $cavendishConfig;

	public function __construct( $options ) {
		$this->cavendishConfig = ConfigFactory::getDefaultInstance()->makeConfig( 'cavendish' );
		parent::__construct( $options );
	}

	/**
	 * @param $out OutputPage object
	 */
	function initPage( OutputPage $out ) {
		// Base CSS modules
		$modules = [
			'skins.cavendish',
			'skins.cavendish.' . $this->cavendishConfig->get( 'CavendishColor' ),
		];

		if ( $this->cavendishConfig->get( 'CavendishExtensionCSS' ) ) {
			$modules[] = 'skins.cavendish.extensions';
		}

		$out->addModuleStyles( $modules );
		parent::initPage( $out );
	}
}
