<?php
// Write a palindrome function without using strrev
function isPalindrome($mystring)
{
	$myArray = array();
	$myArray = str_split($mystring);
	$len = sizeof($myArray);
	$newString = "";

	for ($i = $len-1; $i >= 0; $i--) {
		$newString .= $myArray[$i];
	}

	if ($mystring == $newString) {
		return true;
	}
	
	return false;
}

echo isPalindrome("deleveled");
