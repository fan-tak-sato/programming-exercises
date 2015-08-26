<?php
function array_isearch($value, $array)
{
	while(list($key, $val) = each($array))
	{
		$val = strtolower($val);
		$value = strtolower($value);
		if($val == $value) return $key;
	}
	return false;
}
?>
<h3>RICERCA IN UN ARRAY, ESEMPIO</h3> 
<?php

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key_one = array_isearch('BLUE', $array);
 
echo 'Key One: '.$key_one;
echo '<br>';
$key_two = array_isearch('GrEeN', $array);
echo 'Key Two: '.$key_two;
