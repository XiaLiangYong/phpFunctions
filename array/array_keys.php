<?php
/**
 * array array_keys ( array $array [, mixed $search_value = null [, bool $strict = false ]] )
 * array_keys() 返回 input 数组中的数字或者字符串的键名。
 * 如果指定了可选参数 search_value，则只返回该值的键名。否则 input 数组中的所有键名都会被返回。
 * input 一个数组，包含了要返回的键。
 * search_value 如果指定了这个参数，只有包含这些值的键才会返回。
 * strict 判断在搜索的时候是否该使用严格的比较（===）。
 * Created by PhpStorm.
 * User: xialiangyong
 * Date: 2017/5/23
 * Time: 14:32
 */
//返回所有键名
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));
echo '<hr>';
//返回值等于blue的键名
$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
echo '<hr>';
//返回所有键名
$array = array("color" => array("blue", "red", "green"), "size" => array("small", "medium", "large"));
print_r(array_keys($array, ['blue', 'red', 'green']));