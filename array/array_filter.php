<?php
/**
 * array_filter — 用回调函数过滤数组中的单元
 * array array_filter ( array $array [, callable $callback [, int $flag = 0 ]] )
 * 依次将 array 数组中的每个值传递到 callback 函数。如果 callback 函数返回 true，则 array 数组的当前值会被包含在返回的结果数组中。数组的键名保留不变。
 * array 要循环的数组
 * callback 使用的回调函数 如果没有提供 callback 函数， 将删除 array 中所有等值为 FALSE 的条目。更多信息见转换为布尔值。
 * flag 决定callback接收的参数形式:
 * ARRAY_FILTER_USE_KEY - callback接受键名作为的唯一参数
 * ARRAY_FILTER_USE_BOTH - callback同时接受键名和键值
 *
 * Created by PhpStorm.
 * User: xialiangyong
 * Date: 2017/5/23
 * Time: 14:45
 */

function odd($var)
{
    return ($var & 1);
}

function even($var)
{
    return (!($var & 1));
}

$array1 = array("0" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, 'f' => 0, 'g' => -1);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

//echo "Odd :\n";
//print_r(array_filter($array1, "odd",ARRAY_FILTER_USE_KEY));exit;
//echo "Even:\n";
//print_r(array_filter($array2, "even"));
//echo "filter:\n";
//$entry = array(
//    0 => 'foo',
//    1 => false,
//    2 => -1,
//    3 => null,
//    4 => '',
//    6 => '0',
//    7 => []
//);
//
//print_r(array_filter($entry, function ($value) {
//    if ($value === '0') {
//        return true;
//    }
//}));

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function ($k) {
    return $k == 'b' || $k == 'c';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function ($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));