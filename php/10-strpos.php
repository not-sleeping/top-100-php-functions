<?php

/**
 * strpos(string, string, integer): integer
 * string: a piece of text
 * string: string you are looking for in the text
 * integer: offset in characters from index 0
 */

 $inputStrpos = 'where is this position';

 $output = strpos($inputStrpos, 'e', 3);

 var_dump($output);

 // returns 4

?>