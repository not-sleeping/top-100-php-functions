<?php

/**
 * sprintf(string, ...values): string
 * string: piece of text you would like to format
 * ...values: comma seperated values used for formatting
 * 
 * Each value added to the list can be accessed by a numeric list, unlike an array it starts at 1
 * For example: %s becomes %1$s, %1 let's the function know you want the first value in the comma separated list
 * There are a lot of values (flags & specifiers) that can be used, for more information look at: https://www.php.net/manual/en/function.sprintf.php
 */

 $text = 'I am %2$f years old and I\'m living in %1$s';
 $age = 22;
 $location = 'Rotterdam';

 $output = sprintf($text, $location, $age);

 var_dump($output);

 // returns 'I am 22 years old and I'm living in Rotterdam'

?>