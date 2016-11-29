### 关于php数据类型转换的问题

* php中如果一个变量已经被声明为整型,则无法用它作为数组来存储多个数据单元,要想使得它能存储多个数据单元,需要再声明该变量为数组,将之前的声明覆盖
```php
error_reporting(E_ALL);
ini_set('display_errors', '1');

typetransformInvalid();
reDeclareVariable();

/**
 * 自动类型转换失效
 */
function typetransformInvalid(){
    $a = 1;
    $b = 2;
    if ($b > 2) {
        $a += $b;
    } else {
        for ($i = 0; $i < 10; $i++) {
            // 此时的整型$a无法自动类型转换成数组,但是php在此处也没提示错误信息,算是一个小缺陷
            $a[$i] = $i + 1;
        }
    }
    var_dump($a);   // 输出1
}

/**
 * 通过重新声明为数组变量的方式完成数据的存储
 */
function reDeclareVariable(){
    $a = 1;
    $b = 2;
    if ($b > 2) {
        $a += $b;
    } else {
        // 将$a声明为一个数组变量,此处的声明会将之前的声明覆盖
        $a = array();
        for ($i = 0; $i < 3; $i++) {
            $a[$i] = $i + 1;
        }
    }
    var_dump($a);   // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
}
```

