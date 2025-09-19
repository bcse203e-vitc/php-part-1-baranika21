<?php
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 
               76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
               74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Calculate average
$avg = array_sum($temps) / count($temps);
echo "Average Temperature is : " . round($avg, 1) . "<br>";

// Sort temperatures
sort($temps);

// Lowest 7
$lowest = array_slice($temps, 0, 7);
echo "List of seven lowest temperatures : " . implode(", ", $lowest) . "<br>";

// Highest 7
$highest = array_slice($temps, -7);
echo "List of seven highest temperatures : " . implode(", ", $highest);
?>

