<?php
function isPalindrome($string)
{
	return ($string == strrev($string));
}

echo isPalindrome("deleveled");