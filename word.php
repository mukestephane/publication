<?php 
header('[Content-Types].xml: text/html; charset=UTF-8');
header('Content-Type:application/vnd.ms-word');
header('Expires:0');
header('Cache-Control: must-ravalidate, post-check=0');
header('Content-disposition: attachment;filename='.rand().'.doc');

echo '<html>';
	echo $_GET['data'];
echo '</html>';
?>