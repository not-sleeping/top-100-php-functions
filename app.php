<?php

// get all files we need
$files = glob( __DIR__ . '/php/*.php');

/**
 *  the files are named with strings
 *  we need to do something to prevent the way its ordered by PHP
 *  strings in an ascending order will look like this:
 *  1 
 *  10
 *  2
 *  3
 *  4
 */

$fileOrder = [];
$fileNames = [];

foreach ($files as $file) {
    
    // get the filename
    $name = basename($file, '.php');
    // get the number out of the filename
    $order = strtok($name, '-');
    // push the number into the array
    array_push($fileOrder, $order);

    // get the position of the dash
    $dash = strpos($name, '-');
    // remove everything behind the dash, including the dash
    $prettyname = substr($name, $dash + 1);
    // push the name into a seperate array
    array_push($fileNames, $prettyname);
};

// combine the arrays so the number with be the key for each file
$allFiles = array_combine($fileOrder, $fileNames);

// sort the array based on the key
ksort($allFiles);

for($i = 1; $i <= count($allFiles); $i++)
{
    // reconstruct path
    $filename = $i.'-'.$allFiles[$i];
    $path = __DIR__ . '/php/'.$filename.'.php';

    // show name and output
    echo '<h3 style="margin-bottom:4px; margin-top:20px;">'.$i.' '.$allFiles[$i].'()</h3>';
    require($path);
}

?>