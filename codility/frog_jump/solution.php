<?php

function solution($X, $Y, $D) {
	$left = ($Y - $X) / $D;
	return $left <> intval($left) ? intval($left + 1) : intval($left);
}