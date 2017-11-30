<?php
// 8. 字符串怎么转成整数，有几种方法？怎么实现？
// 强制类型转换: (整型)字符串变量名;
// 直接转换：settype(字符串变量,整型);
// intval(字符串变量);

$a = '2333';
// settype($a,'float');
var_dump(intval($a));