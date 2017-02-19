<?php
/**
 * MediaWiki extension to render TeX
 * Installation instructions can be found on
 * http://www.mediawiki.org/wiki/Extension:SimplePlantUML
 *
 * @ingroup Extensions
 * @author Jmnote
 * @license GNU Public License
 */
 
// Exit if called outside of MediaWiki
if( !defined( 'MEDIAWIKI' ) ) exit;

// Global Settings
$wgExtensionCredits['parserhook'][] = array(
        'path'        => __FILE__,
        'name'        => 'SimplePlantUML',
        'version'     => '0.1',
        'author'      => 'Jmnote',
        'description' => 'render UML between <nowiki><uml></nowiki> and <nowiki></uml></nowiki>',
        'url'         => '//www.mediawiki.org/wiki/Extension:SimplePlantUML'
);

// Register class
$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['SimplePlantUML'] = $dir.'SimplePlantUML.class.php';

$wgHooks['BeforePageDisplay'][] = 'SimplePlantUML::loadJS';
$wgExtensionFunctions[] = 'SimplePlantUML::init';
