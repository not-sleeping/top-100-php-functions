<?php

/**
 * array_merge(array ...arrays)
 * array(s): merge one or more arrays together into one array
 */

 $inputArrayMerge1 = ['merge', 'this'];
 $inputArrayMerge2 = ['beautiful', 'array'];

 $output = array_merge($inputArrayMerge1, $inputArrayMerge2);

 var_dump($output);

 // returns ['merge', 'this', 'beautiful', 'array']

?>