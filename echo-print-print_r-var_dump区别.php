<?php
// 38. echo(),print(),print_r()的区别？
// (1)echo 是语法，Output one or more strings，没有返回值；
// (2)print 是函数，不能输出数组和对象，Output a string，print有返回值；
// (3)print_r 是函数，可以输出数组。print_r是个比较有意思的函数，可以输出stirng、int、float、
// array、object等，输出array时会用结构表示，print_r输出成功时返回true；而且print_r可以通过print_r($str,true)来，使print_r不输出而返回print_r处理后的值。此外，对于echo和print，基本以使用echo居多，因为其效率比print要高。
// 4.var_dump 可以输出数据类型
// 5.echo可以连续输入多个值

$a = 'a';
$b = 1;
$c[0] = 1;

print $a;
echo $a,$b,'<br>';
print_r( $c);
var_dump($a,$b,$c);