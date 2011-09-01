<pre>

<strong>LESS in</strong>
            
<?= file_get_contents('workspace/less/common.less') ?>


- - - - -

<strong>CSS out</strong>
            
<?

require 'workspace/php/lessc.inc.php';

$lc = new lessc();

$contents = file_get_contents( 'workspace/less/common.less' );

echo $lc->parse( $contents );

?>

</pre>