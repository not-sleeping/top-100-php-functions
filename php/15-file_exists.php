<?php

/**
 * file_exists(string): boolean
 * string: enter the path from root (relative path) to check if the file exists
 */

 $text = 'php\15-file_exists.php';

 $output = file_exists($text);

 var_dump($output);

 // returns 1|true

?>