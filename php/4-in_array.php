<?php

/**
 * in_array(mixed, array, boolean) 
 * mixed: value that we need to find
 * array: array to check
 * boolean: true for strict type check
 * returns true or false
 */

$inputInArray = ['lets', 'check', 'if', 'we', 'have', 'this', 1];

$output = in_array('1', $inputInArray, 1);

var_dump($output);

// this returns NULL 

?>