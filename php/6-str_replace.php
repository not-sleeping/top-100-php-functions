<?php

/** 
 * str_replace(string|array, string|array, string|array, integer): string
 * string|array: what you are looking for
 * string|array: what you want to replace it with
 * string|array: the text that should contain the words you are looking for
 * integer: put in a variable to hold the amount of replacements made
 */

$inputStrSearch = 'this';
$inputStrReplace = 'that';
$inputStrSubject = 'lets replace this';
$count = 0;

$output = str_replace($inputStrSearch, $inputStrReplace, $inputStrSubject, $count);

var_dump($output);
// this returns 'lets replace that'
var_dump($count);
// this returns int(1)


/**
 *  Array use case
 */

$inputStrSearchArray = ['this', 'that'];
$inputStrReplaceArray = ['foo', 'bar', 'test'];
$inputStrSubjectForArray = 'lets replace this and this and that';
$count = 0;

$output = str_replace($inputStrSearchArray, $inputStrReplaceArray, $inputStrSubjectForArray, $count);

var_dump($output);
// this returns 'lets replace foo an bar'
var_dump($count);
// this returns 3

?>