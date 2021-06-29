<?php
class SimplePlantUMLHooks {
	public static function onParserFirstCallInit( Parser $parser ) {
		$parser->setHook( 'uml', __CLASS__ . '::renderUML' );
	}

	public static function renderUML($content, $args, $parser) {
		$parser->getOutput()->addModules( 'ext.SimplePlantUML' );
		return ["<uml>$content</uml>", 'markerType'=>'nowiki'];
	}

}
