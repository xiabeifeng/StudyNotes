<?
/**
 * PHP空对象
 */

$obj = new stdClass();  // 实例化一个空对象
$obj->name = 'xiabeifeng';
$obj->sex  = '男';
var_dump($obj);

$newObj1 = $obj;         // 默认传引用(节省内存空间)
echo '<pre>';
var_dump($obj);
var_dump($newObj1);
echo '</pre>';
$obj->age = 24;
echo '<pre>';
var_dump($obj);
var_dump($newObj1);
echo '</pre>';

$newObj2 = clone $obj;   // 传值
echo '<pre>';
var_dump($obj);
var_dump($newObj2);
echo '</pre>';
$obj->age = 25;
echo '<pre>';
var_dump($obj);
var_dump($newObj2);
echo '</pre>';

$array = array('name'=>'xiabeifeng', 'sex'=>'男');
$newArray = $array;     // 默认传值
$newArray = &$array;    // 传引用



