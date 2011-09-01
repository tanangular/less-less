<?

header('Content-type: text/css');

require 'lessc.inc.php';

$lc = new lessc();

$contents = file_get_contents( $_GET['a'] );

echo $lc->parse( $contents );

?>