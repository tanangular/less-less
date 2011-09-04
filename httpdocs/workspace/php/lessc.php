<?

header('Content-type: text/css');

require 'lessc.inc.php';
require '../min/lib/Minify/CSS/Compressor.php';

$lc = new lessc();

$contents = file_get_contents( $_GET['a'] );

$css = $lc->parse( $contents );

echo Minify_CSS_Compressor::process($css);

?>