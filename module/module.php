<?php

function displayingMultiplierTables(){
  $str = '<table class="main-table"><tr>';
  for ($i = 1; $i <= 10; $i++){
    $str = $i == 6 ? "{$str}</tr><tr><td>" : "{$str}<td>";
    for($j = 1; $j <= 10; $j++){
      $str = "{$str}{$i} x {$j} = " . $i * $j . "<br>";
    }
    $str = "{$str}</td>";
  }
  return "{$str}</tr></table>";
}
