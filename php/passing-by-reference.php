<?php

function increment($val) {
	return $val + 1;
}

$a = 1;

echo increment(&$a); 

// Fatal error: http://php.net/manual/en/language.references.pass.php

