<?php

/**
 * 魔术方法调研
 * Created by PhpStorm.
 * User: xialiangyong
 * Date: 2017/5/23
 * Time: 15:28
 */
class test
{
    public $myContent;
    public $a;

    /**
     * 构造函数
     * test constructor.
     */
    public function __construct($string)
    {
        $this->myContent = $string;
        echo "__construct被调用了\n";
    }

    /**
     * 析构函数
     */
    function __destruct()
    {
        echo "__destruct被调用了\n";
    }

    function __call($name, $arguments)
    {
        echo "__call被调用了\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic被调用了\n";
    }

    function __get($name)
    {
        echo "__get被调用了" . $name;
    }

    function __set($name, $value)
    {
        echo "__set被调用了" . $name . $value;
    }

    function __isset($name)
    {
        echo "__isset被调用了" . $name;
    }

    function __unset($name)
    {
        echo "__unset被调用了" . $name;
    }

    function __sleep()
    {
        echo "__sleep被调用了\n";
    }

    function __wakeup()
    {
        echo "__wakeup被调用了\n";
    }

    function __toString()
    {
        echo "__toString被调用了\n";
    }

    function __invoke()
    {
        echo "__invoke被调用了\n";
    }

    function __debugInfo()
    {
        echo "__debugInfo被调用了\n";
    }

    static function __set_state($an_array)
    {
        echo "__set_state被调用了\n";
//        $tmp = new test();
//        $tmp->a = str_replace('$test', '$b', $an_array['a']);//直接赋值
//        return $tmp;//必须返回一个对象，可以是其他类的对象
    }

    function __clone()
    {
        echo "__clone被调用了\n";
    }

}

//__construct __destruct 被调用了
$test = new test('我爱你');

//__get被调用了
//$test->data;

//__set被调用了
//$test->name = 1;

//__clone被调用了
//clone $test;

//__call被调用了
//$test->test();

//__callStatic被调用了
//$test::test();

//__isset被调用了
//isset($test->name);

//__unset被调用了
//unset($test->name);

//当一个对象被串行化,PHP会调用__sleep方法(如果存在的话).
//$se = serialize($test);ss
//在反串行化一个对象后,PHP 会调用__wakeup方法
//echo unserialize($se);

//创建实例后，直接调用对象  __invoke被调用了
//$test();

//__debuginfo() 是php5.6增加的特性，var_dump()一个类时的回应，返回一个包含对象属性的数组   __debugInfo被调用了
//var_dump($test);

//__set_state被调用了
eval('$b = ' . var_export($test, true) . ';');
