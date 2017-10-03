<?php  

$arr = array("abcd","abc","de","hjjj","g","wer");
$new_arr = array();

function insert_array($arr,$new_arr){
	foreach ($arr as $value) {
		$length = strlen($value);
		$new_arr[] = $length;
	}
	return $new_arr;
}

echo "The longest array length is : ";
echo max(insert_array($arr,$new_arr)); echo "\n";

echo "The shortest array length is : ";
echo min(insert_array($arr,$new_arr));
?>