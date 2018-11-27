<?php
function fibonacci($num){
	if($num ==1||$num ==0)
		return 1;
	return fibonacci($num - 1) + fibonacci($num - 2);
}
$num = 6;
echo "fibonacci of $num is " . fibonacci($num) . "\n";
