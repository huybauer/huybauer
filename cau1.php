<?php
$arr = [11, 2, 8, 10, 5, 99, 1, 8, 9];
$arrx = [];
$arry = [];
$arrz = [];
$result;
$n = 3;
for($i = 0; $i < count($arr); $i++){
   if($i < $n){
       $arrx[] = $arr[$i];
   }
   if($i >= $n && $i < 2*$n){
       $arry[] = $arr[$i];
   }
   if($i >= 2*$n && $i < 3*$n){
      $arrz[] = $arr[$i];
   }
}
for($i = 0; $i < $n; $i++){
    $result[]= $arrx[$i];
    $result[]= $arry[$i];
    $result[]= $arrz[$i];
}
var_dump($result);
