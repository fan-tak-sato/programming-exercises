<?php

// greatest common divisor

function magic($p, $q) {
	return ($q == 0) ? $p : magic($q, $p % $q);
}

echo magic(12, 6);
