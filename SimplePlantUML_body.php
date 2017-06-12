<?php
class SimplePlantUML {

	public static function onRegistration() {
		global $wgExtensionFunctions;
		$wgExtensionFunctions[] = __CLASS__ . '::setup';
		Hooks::register( 'ParserFirstCallInit', __CLASS__ . '::onParserFirstCallInit' );
	}

	public static function setup() {
		global $wgOut, $wgSimplePlantUMLUseCDN;
		if( $wgSimplePlantUMLUseCDN ) {
			$wgOut->addScript("<script src='//cdn.rawgit.com/markushedvall/plantuml-encoder/aae868f9/dist/plantuml-encoder.min.js'></script>");
			$wgOut->addModules( 'ext.SimplePlantUML' );
			return;
		}
		$wgOut->addModules(['ext.SimplePlantUML.local','ext.SimplePlantUML']);
	}

	public static function onParserFirstCallInit( Parser $parser ) {
		$parser->setHook( 'uml', __CLASS__ . '::renderUML' );
		return true;
	}

	public static function renderUML($content) {
		return ["<uml>$content</uml>", 'markerType'=>'nowiki'];
	}

}
