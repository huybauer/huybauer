<?php
$arr = [1, 5, 15, 9, 7, 0, -10, 13, 93, 14, 4];
$result;
for($i = 0; $i < count($arr); $i++){
  for($j = $i; $j < count($arr); $j++){
      if(abs($arr[$i]-$arr[$j]) == 1){
          $a1 = $arr[$i];
          $a2 = $arr[$j];
          $array = array($arr[$i], $arr[$j]);
          sort($array);
          $result[] = $array;
      }
  }
}
echo '<pre>'; print_r($result); echo '</pre>';
