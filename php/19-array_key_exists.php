<?php

/** array_key_exists(string|int, array): boolean
 *  string|int: this will be the array key you are searching for in the array
 *  array: in this array the key will be searched for
 */

 $arrayKey = 'key';
 $array = [
     'does' => 'I',
     'this' => 'dont',
     'key' => 'really',
     'exist' => 'know',
 ];

 $output = array_key_exists($arrayKey, $array);

 var_dump($output);

// returns 1|true

?>