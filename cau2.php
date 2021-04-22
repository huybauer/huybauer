<?php
$arr = [0, 100, -4, 8, 143, 5, 99, 100];
$a1 = max($arr);
$max = 0;
for($i = 0; $i < count($arr); $i++){
    if($arr[$i] != $a1 && $arr[$i] > $max){
        $max = $arr[$i];
    }
}
$a2 = $max;
$sum = $a1 + $a2;
echo $sum;
