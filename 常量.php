<!-- 10. 常量如何定义? 如何检测一个常量是否被定义？常量的值只能是哪些数据类型？
define()//定义常量 , defined()//检查常量是否定义
常量的值只能是标量类型的数据。 

bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )

name
常量名。

value
常量的值；在 PHP 5 中，value 必须是标量( integer、 float、string、boolean、NULL）在 PHP 7 中还允许是个 array 的值。

Warning
常量还可以定义为 resource 类型，但并不推荐这样做，因为可能会有不可预知的行为发生。
case_insensitive
如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。比如， CONSTANT 和 Constant 代表了不同的值。

-->
<?php
define('CONSTANT','hello world',true);
// echo CONSTANT;
// echo constant;


// bool defined ( string $name )
// 检查该名称的常量是否已定义。

// Note:
// 如果你要检查一个变量是否存在，请使用 isset()。 defined() 函数仅对 constants 有效。如果你要检测某个函数是否存在，使用 function_exists()。
// if(defined('CONSTANT')){
//   echo 'aaaa';
// }
var_dump(defined('constant'));

// 12. 如果定义了两个相同的常量，前者和后者哪个起作用？
// 前者起作用，因为常量一旦定义就不能被重新定义或者取消定义。

// 13. 常量和变量有哪些区别？
// 1）常量前没有$符号；
// 2）常量只能通过define()定义，而不能通过赋值语句定义；
// 3）常量可以在任何地方定义和访问，而变量有全局和局部之分；
// 4）常量一旦定义就不能被重新定义或者取消定义，而变量而通过赋值方式重新定义；
// 5）常量的值只能是标量数据，而变量的数据库类型有8种原始数据类型。