<?php

/**
 * Get the next palindrome number
 * 
 * @param int $number
 */
function nextPalindrome($number)
{
	if (!is_numeric($number)) {
		throw new Exception("The number set as argument is not a number");
	}
	
	$number++;
	while($number) {
		if ($number>=1000000000) {
			throw new Exception("The number is too big, try to enter a smaller number");
		}
		$number = (string) $number;
		if ( strrev($number) === $number ) {
			return $number;
		}
		$number = (int) $number;
		$number++;
	}
}
