<?php
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "Original Array :<br>";
print_r($age);

// a) Ascending order sort by value
asort($age);
echo "<br><br>a) Ascending order sort by Value:<br>";
print_r($age);

// b) Ascending order sort by Key
ksort($age);
echo "<br><br>b) Ascending order sort by Key:<br>";
print_r($age);

// c) Descending order sort by Value
arsort($age);
echo "<br><br>c) Descending order sort by Value:<br>";
print_r($age);

// d) Descending order sort by Key
krsort($age);
echo "<br><br>d) Descending order sort by Key:<br>";
print_r($age);
?>

