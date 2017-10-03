<?php 

$arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);


$new_arr = array_count_values($arr);

foreach ($new_arr as $key=>$value) {
	echo "key ".$key." appear : ".$value."\n";
}

//print_r( array_count_values($arr));


 ?>