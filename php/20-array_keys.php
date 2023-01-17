<?php

/** array_keys(array): array
 *  array: this is the array you want to extract the array keys from
 */

 $array = [
     'show' => 'foo',
     'me' => 'bar',
     'the' => 'foo',
     'keys' => 'bar',
 ];

 $output = array_keys($array);

 var_dump($output);

// returns ['show', 'me', 'the', 'keys']

?>