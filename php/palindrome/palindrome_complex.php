<?php

/**
 *
 * Write a function that checks if a given sentence is a palindrome. A palindrome is a word, phrase, verse, or sentence that reads the same backward or forward. Only the order of English alphabet letters (A-Z and a-z) should be considered, other characters should be ignored.
 *
 * For example, Palindrome::isPalindrome(‘Noel sees Leon.’) should return true as spaces, period, and case should be ignored resulting with 'noelseesleon' which is a palindrome since it reads same backward and forward.
 * 
 */

class Palindrome
{
    public static function isPalindrome($str)
    {
        $str = preg_replace("/[^A-Za-z0-9 ]/", '', $str);
        
        $str = strtolower( str_replace(' ', '', $str) );
        
        return ($str == strrev($str));
    }
}

echo Palindrome::isPalindrome('Noel sees Leon.');
