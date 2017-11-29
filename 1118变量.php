<?php
$a=10;
$b=&$a;
$a++;
echo $b;

unset($a);
// echo $a;
echo $b;
