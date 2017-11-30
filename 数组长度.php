<?php
$a = array();
// $a[0]=1;
$a[1]=3;
$a[2]=5;
$a[3]=5;
$a[0][0] = 6;
array_push($a[0],'a','5');
// 0(或COUNT_NORMAL)为默认,不检测多维数组(数组中的数组);
// 1(或COUNT_RECURSIVE)为检测多维数组，
var_dump($a);
var_dump(count($a,1));
var_dump(count(null));
