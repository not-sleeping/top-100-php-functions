<?php

/**
 * trim(string, string): string
 * string: piece of text you would like to edit
 * string: this string contains all the characters you would like to be removed from the piece of text
 * 
 * note: trim only removes characters from the beginning and end of the string,
 * so 'e' will not be included in the trim because after trimming 'y', 'x' and 'z', there is no 'e' at the start or the end
 * 
 * tip: seperate the characters with a backslash
 */

 $text = 'Let me trim thiszxy';
 $remove = 'y\x\z\e';

 $output = trim($text, $remove);

 var_dump($output);

 // returns 'Let me trim this'

?>