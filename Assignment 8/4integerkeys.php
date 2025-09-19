<?php
$x = array(1, 2, 3, 4, 5);

var_dump($x); // Original array

unset($x[3]); // Delete element with index 3 (value 4)
$x = array_values($x); // Re-index keys

var_dump($x); // Normalized array
?>

