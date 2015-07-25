<?php

/**
 *
 * An anagram is a word formed from another by rearranging its letters, using all the original letters exactly once; for example, orchestra can be rearranged into carthorse. Write a function that checks if two words are each other's anagrams.
 * For example, AreAnagrams::areStringsAnagrams('momdad', 'dadmom') should return true as arguments are anagrams.
 * 
 * SOLUTION using http://php.net/manual/en/function.count-chars.php
 */
 
class AreAnagrams
{
    public static function areStringsAnagrams($a, $b)
    {
        return(count_chars($a, 1) == count_chars($b, 1));
    }
}

echo AreAnagrams::areStringsAnagrams('momdad', 'dadmom') ? 'True' : 'False';

