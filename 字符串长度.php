<?php
$str = "abcdefgh";
$str1 = "哈哈";
var_dump(strlen($str));
var_dump(strlen($str1));

// mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )
var_dump(mb_strlen($str1,'UTF-8'));