<?php
$colors = array(
	'r' => 'f00',
	'g' => '0f0',
	'b' => '00f'
);

next($colors);

foreach ($colors as $k => $v) {
	echo $k;
}

reset($colors);

while(list($v, $k) = each($colors)) {
	echo $v;
}
