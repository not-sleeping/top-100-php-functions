<?php

/** 1
 * 
 * count(array) 
 * returns amount of items in an array
 * 
 */
$inputCount = ['how', 'much', 'items', 'to', 'count'];
var_dump(count($inputCount));
// this returns 5

echo '</br>';

/** 2
 * 
 * is_array(mixed) 
 * returns true or false based on if value is an array
 * 
 */
$inputIsArray = ['is', 'this', 'a', 'real', 'array'];
var_dump(is_array($inputIsArray));
// this returns 1|true

echo '</br>';

/** 3
 * 
 * substr(string, integer, integer) 
 * string: a piece of text
 * integer: offset from right
 * integer: offset from left
 * returns part of a string
 * 
 */
$inputSubstr = 'I only want this and not that';
var_dump(substr($inputSubstr, -30, 16));
// this returns 'I only want this'

echo '</br>';

/** 4
 * 
 * in_array(mixed, array, boolean) 
 * mixed: value that we need to find
 * array: array to check
 * boolean: true for strict type check
 * returns true or false
 * 
 */
$inputInArray = ['lets', 'check', 'if', 'we', 'have', 'this', 1];
var_dump(in_array('1', $inputInArray, 1));
// this returns NULL 

echo '</br>';

/** 5
 * 
 * explode(string, string, integer) 
 * string: text we can use as a separator
 * string: text we need to make an array
 * integer: maximum array items
 * returns true or false
 * 
 */
$inputExplode = 'lets, make, this, an, array';
var_dump(explode(', ', $inputExplode, 4));
// this returns ['lets', 'make', 'this', 'an, array']

echo '</br>';

/** 6
 * str_replace(string|array, string|array, string|array, integer)
 * string|array: what you are looking for
 * string|array: what you want to replace it with
 * string|array: the text that should contain the words you are looking for
 * integer: put in a variable to hold the amount of replacements made
 * 
 */

$inputStrSearch = 'this';
$inputStrReplace = 'that';
$inputStrSubject = 'lets replace this';
$count = 0;
var_dump(str_replace($inputStrSearch, $inputStrReplace, $inputStrSubject, $count));
// this returns 'lets replace that'
echo '</br>';

var_dump($count);
// this returns 1
echo '</br>';


$inputStrSearchArray = ['this', 'that'];
$inputStrReplaceArray = ['foo', 'bar', 'test'];
$inputStrSubjectForArray = 'lets replace this and this and that';
$count = 0;
var_dump(str_replace($inputStrSearchArray, $inputStrReplaceArray, $inputStrSubjectForArray, $count));
// this returns 'lets replace foo an bar'
echo '</br>';

var_dump($count);
// this returns 3
echo '</br>';


?>