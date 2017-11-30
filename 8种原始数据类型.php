<!-- // 5. php中变量有哪些基本数据类型？
// php支持8种原始数据类型。
// 包括：
// 四种标量类型（布尔型boolean，整型interger，浮点型float/double , 字符串string）
// 两种复合类型(数组array ， 对象object)
// 两种特殊类型（资源resource，NULL） -->

<?php
// $a = "hello World!"; //字符串
// echo $a;
// $b = true; // 布尔型
// var_dump($b);
// var_dump ((bool)  "" );         // bool(false)
//  var_dump ((bool)  1 );          // bool(true)
//  var_dump ((bool) - 2 );         // bool(true)
//  var_dump ((bool)  "foo" );      // bool(true)
//  var_dump ((bool)  2.3e5 );      // bool(true)
//  var_dump ((bool) array( 12 ));  // bool(true)
//  var_dump ((bool) array());    // bool(false)
//  var_dump ((bool)  "false" );    // bool(true)

/* $a  =  1234 ;  // 十进制数
var_dump($a);
 $a  = - 123 ;  // 负数
var_dump($a);
 $a  =  0123 ;  // 八进制数 (等于十进制 83)
var_dump($a);
 $a  =  0x1A ;  // 十六进制数 (等于十进制 26)
var_dump($a); */

/* $x = 10.365; // 浮点型
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);
 */

/* $cars=array("Volvo","BMW","Toyota"); // 数组V
var_dump($cars); */

/* class Car
{
  var $color;
  function Car($color="green"){
    $this->color = $color;
  }
  function what_color(){
    return $this;
  }
}

$car = new Car;
var_dump( $car->what_color()); */

$x = "hello world";
$x = null;
var_dump($x);


