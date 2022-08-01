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

function displayingColorsMultiplierTables(){
  $search = ['1', '2', '3', '4'];
  $replace = ['<span class="red">1</span>', '<span class="green">2</span>', '<span class="yellow">3</span>', '<span class="blue">4</span>'];
  return str_replace($search, $replace, displayingMultiplierTables());
}

function mb_strrev($str){
    $result = '';
    for ($i = 0, $len = mb_strlen($str); $i < $len; $i++){
      $result = mb_substr($str, $i, 1) . $result;
    }
    return $result;
}
