<?php
class SimplePlantUML {

	public static function onRegistration() {
		Hooks::register( 'ParserFirstCallInit', __CLASS__ . '::setup' );
	}

	public static function setup( Parser $parser ) {
		$parser->setHook( 'uml', __CLASS__ . '::renderUML' );
	}

	public static function renderUML($content, $args, $parser) {
		$parser->getOutput()->addModules( 'ext.SimplePlantUML' );
		return ["<uml>$content</uml>", 'markerType'=>'nowiki'];
	}

}
