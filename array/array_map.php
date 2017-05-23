<?php
/**
 * array_map — 为数组的每个元素应用回调函数
 * array array_map ( callable $callback , array $array1 [, array $... ] )
 * array_map()：返回数组，是为 array1 每个元素应用 callback函数之后的数组。 callback 函数形参的数量和传给 array_map() 数组数量，两者必须一样。
 *
 * Created by PhpStorm.
 * User: xialiangyong
 * Date: 2017/5/23
 * Time: 14:39
 */

function cube($n)
{
    return '测试=' . $n;
}

$a = array(1, 2, 3, 4, 5);
$b = array_map(function ($args) {
    return '测试环境=' . $args;
}, $a);
print_r($b);