<?php
$arr = array('james', 'tom', 'symfony');
echo implode(",",$arr); // 分割数组

$str = 'jack,james,tom,symfony';
$arr = explode(',',$str);
var_dump($arr);
