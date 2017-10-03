<?php  

$arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

//needed functions
function min_sort($arr){
$n = count($arr);
	for ($i = 0; $i < $n; $i++) {
		for ($k = $n-1; $k > $i; $k--) {
			if ($arr[$k] < $arr[$k-1]) {
				$temp = $arr[$k];
				$arr[$k] = $arr[$k-1];
				$arr[$k-1] = $temp;
			}
		}
		
	}
return $arr;
}

function max_sort($arr){
$n = count($arr);
	for ($i = 0; $i < $n; $i++) {
		for ($k = $n-1; $k > $i; $k--) {
			if ($arr[$k] > $arr[$k-1]) {
				$temp = $arr[$k];
				$arr[$k] = $arr[$k-1];
				$arr[$k-1] = $temp;
			}
		}
		
	}
return $arr;
}

echo 'Average Temperature is : ';
$average = array_sum($arr) / count($arr);
echo $average;
echo "\n";


echo "list of five lowest temperatures : ";
echo implode(",", array_splice(min_sort($arr), 0, 5)); echo "\n";

echo "List of five highest temperatures : ";
echo implode(",", array_splice(max_sort($arr), 0, 5));




?>