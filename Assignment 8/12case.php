<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

// Lower case
$lower = array_map('strtolower', $Color);
echo "Values are in lower case.<br>";
print_r($lower);
echo "<br><br>";

// Upper case
$upper = array_map('strtoupper', $Color);
echo "Values are in upper case.<br>";
print_r($upper);
?>

