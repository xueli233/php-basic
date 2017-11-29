<?php
//1. 变量如何定义？如何检查变量是否定义？如何删除一个变量？判断一个变量是否为空的函数？
//isset()
//unset()
//empty()

/*$a = 1;
var_dump(isset($a));
unset($a);
var_dump( isset($a));
var_dump( empty($a));*/


//2. 什么是可变变量？
//一个变量的变量名可以动态的设置和使用。
//$a = 'hello' , $$a = 'world', ${$a}=hello world

/* $a = 'hello';
$$a = 'world';
echo $a;
echo "<br>";
echo $$a;
echo "<br>";
echo ${$a};
echo "<br>"; */

// 3. 变量赋值方式有哪几种？
// 1）直接赋值
// 2）变量间赋值
// 3）引用赋值
// 4. 引用和拷贝有什么区别？

/* $a = 10;
$b = $a;
$a++;
echo $b; */

/* $a = 10;
$b = &$a;
$a++;
echo $b; */
