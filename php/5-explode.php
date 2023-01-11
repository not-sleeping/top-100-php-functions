<?php

/** 
 * explode(string, string, integer): array
 * string: text we can use as a separator
 * string: text we need to make an array
 * integer: maximum array items
 * returns true or false
 */

$inputExplode = 'lets, make, this, an, array';

$output = explode(', ', $inputExplode, 4);

var_dump($output);

// this returns ['lets', 'make', 'this', 'an, array']

?>