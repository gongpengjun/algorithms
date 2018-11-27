<?php
function fibonacci($num){
	$result = array(0,1);
	if($num ==1||$num ==0)
		return $result[$num];
	$fibNumOne = 1;
	$fibNumTwo = 0;
	$fibNum = 0;
	for($i=2;$i<=$num;++$i){
		$fibNum = $fibNumOne+$fibNumTwo;
		$fibNumTwo = $fibNumOne;
		$fibNumOne= $fibNum;
	}
	return $fibNum;
}
$num = 6;
echo "fibonacci of $num is " . fibonacci($num) . "\n";
