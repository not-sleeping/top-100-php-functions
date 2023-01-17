<?php

/** function_exists(string): boolean
 *  string: this is the function you are looking for, it does not need to be in the same file
 */

function test_function()
{
    // cool function logic
}

$function = 'test_function';

$output = function_exists($function);

var_dump($output);

// returns 1|true

?>