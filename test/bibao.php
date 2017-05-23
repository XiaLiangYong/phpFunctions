<?php
/**
 * Created by PhpStorm.
 * User: xialiangyong
 * Date: 2017/5/23
 * Time: 17:07
 */
$cl = function ($name) {
    $datra = sprintf('hello %s', $name);
    return $datra;
};
//echo call_user_func_array(function ($name) {
//    return 'hello'.$name;
//}, ['world']);
if ($cl instanceof Closure) {
    echo '这是一个闭包';
    $data = call_user_func_array($cl, ['nihapo']);
    echo $data;
} else {
    echo '这不是一个闭包';
}