<?php

$num  = mt_rand(1, 100);
$num1 = $num;
$num2 = ++$num;
// 取30到50之间
// 方法一:
echo $num2 >= 30 && $num2 =  < 50 ? "自增之后的{$num2}在30-50之间" : "自增之后的{$num2}不在30-50之间";
echo '<hr>';
方法二:
// !(小于30||大于50)

echo $num % 2 == 1 ? "生成的{$num1}为奇数" : "生成的{$num1}不为奇数";
echo '<hr>';
echo $num1 % 3 == 0 || $num1 % 5 == 0 ? "生成的{$num1}能被3或者5整除" : "生成的{$num1}不能被3或者5整除";
echo '<hr>';
echo $num1 % 3 == 0 && $num1 % 5 == 0 ? "生成的{$num1}能被3和5同时整除" : "生成的{$num1}不能被3和5同时整除";
// 方法2:被15整除
