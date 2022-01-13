<?php

class SkinCavendish extends SkinTemplate {
	/**
	 * @param $out OutputPage object
	 */
	function initPage( OutputPage $out ) {
		if ( $this->getConfig()->get( 'CavendishExtensionCSS' ) ) {
			$out->addModuleStyles( 'skins.cavendish.extensions' );
		}
		parent::initPage( $out );
	}
}
