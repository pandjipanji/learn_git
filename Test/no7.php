<?php  

$arr_original = array(1,2,3,4,5);

echo 'Original Array : ';
echo implode(" ", $arr_original);
echo "\n";



$arr_add = array('$');
echo "after inserting '$' the array is : ";
array_splice($arr_original, 3, 0, $arr_add);
echo implode(" ", $arr_original);
?>