<?
/**
 * PHP空对象
 */

$obj = new stdClass();  // 实例化一个空对象
$obj->name = 'xiabeifeng';
$obj->sex  = '男';
var_dump($obj);

$newObj = $obj;         // 默认传引用(节省内存空间)
$newObj = clone $obj;   // 传值

$array = array('name'=>'xiabeifeng', 'sex'=>'男');
$newArray = $array;     // 默认传值
$newArray = &$array;    // 传引用



