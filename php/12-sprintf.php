<?php

/**
 * sprintf(string, ...values): string
 * string: piece of text you would like to format
 * ...values: comma seperated values used for formatting
 */

 $text = 'I am %2$.0f years old and I\'m living in %1$\'*10s';
 $age = 22.145;
 $location = 'Rotterdam';

 $output = sprintf($text, $location, $age);

 var_dump($output);

 // returns 'I am 22 years old and I'm living in *Rotterdam'

?>