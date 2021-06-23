<?php
function bubbleSort($array) {
  for ($i = 0; $i < count($array); $i++) {
      for ($j = 0; $j < count($array)- $i- 1; $j++) {
          if ($array[$j] > $array[$j + 1]) {
              $flag = $array[$j+1];
              $array[$j+1] = $array[$j];
              $array[$j] = $flag;
          }
      }
  }
  return $array;
}

$newArray = [3,7,4,5,3,6,71,1];
echo implode(", ", bubbleSort($newArray));
