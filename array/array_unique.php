<?php
/**
 * Created by PhpStorm.
 * User: xialiangyong
 * Date: 2017/5/23
 * Time: 15:04
 */
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);