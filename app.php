<?php

$files = glob( __DIR__ . '/php/*.php');

foreach ($files as $file) {
    $name = basename($file, ".php");
    echo $name.'</br>';
    require($file);
    echo '</br></br>';
}

?>