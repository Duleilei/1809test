<?php

// @ 错误抑制运算符
//
// 控制表达式中的系统报错
//

$int;

// 定义未赋值的变量,数据类型为null,但是系统会报错
//
// @ 会抑制,不输出报错信息

@var_dump($int);

// 语法错误和函数或者程序的拼写错误,是无法抑制的

// @var_dup($int);

// @var_dump($int)
