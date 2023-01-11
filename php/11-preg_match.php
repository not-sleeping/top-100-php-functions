<?php

/**
 * preg_match(string, string, array, flags|int, int): integer
 * string: a text pattern
 * string: a piece of text you are checking for the pattern
 * array: if you set a variable, it will be filled with an array with all the matches
 * flags|int: takes flags to change what will be returned, int for offset if no flag is used 
 * int: for offset from index 0
 */

 $pattern = '/this/';
 $text = 'we are looking for this';

 $output = preg_match($pattern, $text, $matches, PREG_UNMATCHED_AS_NULL, 0);

 var_dump($output);

 // returns 1

?>