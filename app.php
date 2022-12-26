<?php

$files = glob( __DIR__ . '/php/*.php');

foreach ($files as $file) {
    $name = str_replace('-', ' - ', basename($file, ".php"));
    echo '<h3 style="margin:0px; padding:0px;">'.$name.'()</h3>';
    require($file);
    echo '</br></br>';
}

?>