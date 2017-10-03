<?php  

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lower = array_map('strtolower', $color);
$upper = array_map('strtoupper', $color);

echo "Values are in lower case : ";
print_r($lower);
echo "\n";

echo "Values are in upper case : ";
print_r($upper);
?>