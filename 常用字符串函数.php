<?php
/* A. 字符串输出函数
B. 去除字符串首尾空格的函数： trim ltrim rtrim（别名：chop） 使用第二个参数，还可以去除指定的字符。
string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
" " (ASCII 32 (0x20))，普通空格符。
"\t" (ASCII 9 (0x09))，制表符。
"\n" (ASCII 10 (0x0A))，换行符。
"\r" (ASCII 13 (0x0D))，回车符。
"\0" (ASCII 0 (0x00))，空字节符。
"\x0B" (ASCII 11 (0x0B))，垂直制表符。*/
$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);
print "\n";
$trimmed = trim($text);
var_dump($trimmed);
$trimmed = trim($text, "\t.");
var_dump($trimmed);
$trimmed = trim($hello, "Hdle");//有的字符都去掉
var_dump($trimmed);

print "\n";
print "\n";
print "\n";
print "\n";
// 清除 $binary 首位的 ASCII 控制字符
// （包括 0-31）
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

// C. 转义字符串函数：addslashes()
$str = '{"Pro":"P10134871","ProName":"葡萄酒"}';
$str1 = addslashes( $str );
var_dump($str1);
var_dump(stripcslashes($str1));
// D. 获取字符串长度的函数：strlen()
// E. 截取字符串长度的的函数：substr()
// F. 检索字符串函数： strstr() , strpos()
// G. 替换字符串函数：str_replace() 