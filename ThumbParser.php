<?php
/**
* @addtogroup Extensions
*/
// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

/* Configuration */

// Credits
$wgExtensionCredits['parserhook'][] = array (
	'path'=> __FILE__ ,
	'name'=>'ThumbParser',
	'url'=>'http://www.mediawiki.org/wiki/Extension:ThumbParser',
	'description'=>'Prints users Thumb size',
	'descriptionmsg' => 'thumbparser-desc',
	'author'=>'[http://www.dasch-tour.de DaSch]',
	'version'=>'0.2',
);
$dir = dirname( __FILE__ ) . '/';

// Internationalization
$wgExtensionMessagesFiles['ThumbParser'] = $dir . 'ThumbParser.i18n.php';
$wgExtensionMessagesFiles['ThumbParserMagic'] = $dir . 'ThumbParser.i18n.magic.php';

# Define a setup function
$wgAutoloadClasses['ThumbParserHooks'] = "$dir/ThumbParser.hooks.php";
$wgHooks['ParserFirstCallInit'][] = 'ThumbParserHooks::efThumbParserFunction_Setup';
