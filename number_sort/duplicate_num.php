<?php
function FindDuplicateNum(array $arr) {
    $length = count($arr);

    if($arr==null||$length<=0)
        return;

    for($i = 0; $i < $length; ++$i) {
        #echo $arr[$i] . " ";
        if($arr[$i] < 0||$arr[$i]>$length-1) {
            return false;
        }
    }
    #echo "\n";

    $number = 0;
    for($i = 0; $i < $length; ++$i) {
        /*if($arr[$i] == $i) {
            var_dump("i : $i, arr[$i]: $arr[$i]");
        }*/
        while($arr[$i] != $i) {
            if($arr[$i] == $arr[$arr[$i]]) {
                $number = $arr[$i];
                #var_dump("i : $i, arr[$i]: $number, arr[$number]: " . $arr[$arr[$i]]);
                return $number;
            } else {
                $temp = $arr[$i];
                #var_dump("befroe swap i : $i, arr[$i]: $temp, arr[$temp]: " . $arr[$arr[$i]]);
                $arr[$i] = $arr[$arr[$i]];
                $arr[$temp] = $temp;
                #var_dump("after  swap i : $i, arr[$i]: " . $arr[$i] . ", arr[$temp]: $temp");
            }
        }
    }
    return -1;
}

$arr = [2,3,1,0,2,5,3];
$num = FindDuplicateNum($arr);
if ($num == false) {
    echo "error\n";
} else {
    echo "found duplicate number: " . $num . "\n";
}
