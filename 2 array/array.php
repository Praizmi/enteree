<?php
$array = [3, 1, 4, 1, 5, 9];

// Remove duplicates
$uniqueArray = array_unique($array);

// Sort in descending order
rsort($uniqueArray);

// Output the final sorted array
print_r($uniqueArray);

// for both
// echo rsort(array_unique($array));