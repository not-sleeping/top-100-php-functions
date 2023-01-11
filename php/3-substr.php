<?php

/**
 * substr(string, integer, integer): string
 * string: a piece of text
 * integer: offset from right
 * integer: offset from left
 * returns part of a string
 */

$inputSubstr = 'I only want this and not that';

$output = substr($inputSubstr, -30, 16);

var_dump($output);

// this returns 'I only want this'

?>