<?php
// 数字键名会被重新书写
// 同名的后一个覆盖前一个
$arr1 = array("color"=>"red",2,4);
$arr2 = array("a","b","color"=>"green","shape"=>"trapezoid",4);
// var_dump(array_merge($arr1,$arr2));
echo '<br>';
// 键名相同的会被前一个覆盖
var_dump($arr1);
var_dump($arr2);
var_dump($arr1+$arr2);

