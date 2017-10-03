<?php 

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "a) ";
			asort($arr);
			print_r($arr);
echo "\n";

echo "b) ";
			ksort($arr);
			print_r($arr);
echo "\n";

echo "c) ";
			arsort($arr);
			print_r($arr);
echo "\n";

echo "d) ";
			krsort($arr);
			print_r($arr);
echo "\n";
 ?>