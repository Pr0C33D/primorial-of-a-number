<?php 
// https://www.codewars.com/kata/5a99a03e4a6b34bb3c000124
function numPrimorial($n){
  while($n != 0){
    $p++;
    if(!preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $p))){
      $res[] = $p;
      $n--;
    }
  }
  return array_product($res);
}