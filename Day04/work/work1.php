<?php

$num = mt_rand(1000, 9999);

if ($num % 4 == 0 && $num % 100 != 0) {
    echo "输出数字为{$num}OK";
} elseif ($num % 400 == 0) {
    echo "输出数字为{$num}OK";
} else {
    echo "输出数字为{$num}不OK";
}
echo '<hr>';
echo ($num % 4 == 0 && $num % 100 != 0) || ($num % 400 == 0) ? "输出数字为{$num}OK" : "输出数字为{$num}不OK";
echo '<hr>';
$str = ($num % 4 == 0 && $num % 100 != 0) || ($num % 400 == 0) ? "输出数字为{$num}OK" : "输出数字为{$num}不OK";
echo $str;
