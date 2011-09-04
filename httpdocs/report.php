<pre>

<strong>LESS in</strong>

<?= file_get_contents('workspace/less/common.less') ?>


- - - - -

<strong>CSS out</strong>

<?

require 'workspace/php/lessc.inc.php';

$lc = new lessc();

$contents = file_get_contents( 'workspace/less/common.less' );

$css = $lc->parse( $contents );

echo $css;

?>

- - - - -

<strong>CSS minified</strong>

<?php

require 'workspace/min/lib/Minify/CSS/Compressor.php';

echo Minify_CSS_Compressor::process($css);

?>

</pre>