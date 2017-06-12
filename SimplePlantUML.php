<?php
if ( function_exists( 'wfLoadExtension' ) ) {
  wfLoadExtension( 'SimplePlantUML' );
  wfWarn(
    'Deprecated PHP entry point used for SimplePlantUML extension. Please use wfLoadExtension ' .
    'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
  );
  return true;
} else {
  die( 'This version of the SimplePlantUML extension requires MediaWiki 1.25+' );
}
