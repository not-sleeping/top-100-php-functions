<?php

/** dirname(string, integer): string
 *  string: this will be the file you want to know the parent directory name of
 *  integer: levels of parents directories to go up, 1 will be the first parent, defaults to 1 if empty
 */

 $path = '/php/21-dirname.php';
 $levels = 1;

 $output = dirname($path);

 var_dump($output);

// returns '/php'

?>