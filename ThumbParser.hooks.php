<?php
class ThumbParserHooks {
	public function efThumbParserFunction_Setup( $parser ) {
		# Set a function hook associating the "example" magic word with our function
		$parser->setFunctionHook( 'thumb', 'ThumbParserHooks::efThumbParserFunction_Render' );
		return true;
	}
	
	function efThumbParserFunction_Render( $parser, $param1 = '') {
		# The parser function itself
		# The input parameters are wikitext with templates expanded
		# The output should be wikitext too
		global $wgThumbLimits, $wgUser;
		$param1 = strtolower($param1);
		$parser->disableCache(); # Mark this content as uncacheable
		$wopt = $wgUser->getOption('thumbsize');
		switch ($param1) {
			case 'size':
				$output = $wgThumbLimits[$wopt];
				break;
			case 'px':
				$output = $wgThumbLimits[$wopt].'px';
				break;
			case 'width':
				$size = intval($wgThumbLimits[$wopt])+10;
				$strsize = strval($size);
				$output = $strsize."px";
				break;
			default:
				$output = $wgThumbLimits[$wopt];
		}
		return $output;
	}
}
