<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$result = array();

foreach ($array1 as $key => $value) {
    $result[$key] = array_merge(array($array2[$key]), $array1[$key]);
}

print_r($result);
?>

