<?php
$original = array(1, 2, 3, 4, 5);

echo "Original array :<br>";
echo implode(" ", $original) . "<br>";

// Insert '$' at position 3 (before element with index 3 → value 4)
array_splice($original, 3, 0, '$');

echo "After inserting '\$' the array is :<br>";
echo implode(" ", $original);
?>

