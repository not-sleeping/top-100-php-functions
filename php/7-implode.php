<?php

/**
 * implode(array|string, array)
 * array|string: an array you want to make a string or a separator
 * array: an array you want to make a string if using a separator
 */

 $inputImplode = ['lets', 'make', 'this', 'one', 'sentence'];

 $output = implode(' ', $inputImplode);

 var_dump($output);

//  returns 'lets make this one sentence'

?>