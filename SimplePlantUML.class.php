<?php
class SimplePlantUML {

	static function init() {
		global $wgParser;
		$wgParser->setHook( 'uml', 'SimplePlantUML::renderUML' );
	}

	static function renderUML($content) {
		return ["<uml>$content</uml>", 'markerType'=>'nowiki'];
	}
	
	static function loadJS(&$out, &$skin ) {
		$out->addScript( <<<HEREDOC
<style>uml{display:none}</style>
<script src='//cdn.rawgit.com/markushedvall/plantuml-encoder/aae868f9/dist/plantuml-encoder.min.js'></script>
<script>(window.RLQ=window.RLQ||[]).push(function(){
$('uml').each(function() {
$(this).replaceWith($('<img>').attr('src','http://www.plantuml.com/plantuml/img/'+plantumlEncoder.encode($(this).text())));
})})</script>
HEREDOC
);
		return true;
	}
}
