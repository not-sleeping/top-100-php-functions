<?php

/** file_get_contents(string, boolean, context, integer, integer)
 *  string: this is the filepath to get the file you want
 *  boolean: true if you want the function to automaticly add the filepath, false if you do this manually
 *  context: if you want to use a custom context with stream_context_create()
 *  integer: this is the offset, the position you want to start with the string
 *  integer: this is the maximum length of the string
 *
 *  returns false on failure
 */

 $filename = 'php/test.txt'; // contains: "this file is here to test built-in file function"
 $includePath = false;
 $context = null;
 $offset = 13;
 $length = 12;

 $output = file_get_contents($filename, $includePath, $context, $offset, $length);

 var_dump($output);

// returns 'here to test'

?>