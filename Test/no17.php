<?php 

$arr = range(0,20);

function lowest_arr($arr){
	array_shift($arr);
	return $arr;
}

echo min(lowest_arr($arr));

 ?>