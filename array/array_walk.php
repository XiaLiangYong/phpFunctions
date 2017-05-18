<?php
/** 使用用户自定义函数对数组中的每个元素做回调处理
 * bool array_walk ( array &$array , callable $callback [, mixed $userdata = NULL ] )
 * 将用户自定义函数 funcname 应用到 array 数组中的每个单元。
 * array_walk() 不会受到 array 内部数组指针的影响。array_walk() 会遍历整个数组而不管指针的位置。
 * Date: 2017/5/18
 * Time: 15:22
 */
$fruits = array("a" => "1", "b" => "c", "d" => "3", "e" => "4");

function test_alter($item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
    return 11111111111;
}

function test_print(&$item2, $key)
{
    $item2 = "$key. $item2<br />\n";
}

array_walk($fruits, 'test_print', 'fruit');
var_dump($fruits);
exit;