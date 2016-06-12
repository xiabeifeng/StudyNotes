# 常用的函数

* 在计算价格的时候,我们最好使用sprintf()函数将价格格式化并保留2位小数,不然的话，我们在显示价格的时候有可能有很多位小数点。
```php
<?php

$price = sprintf('%.2f', $originalPrice * $discount);    // 商品价格 = 原价 * 折扣
```

* json_decode($jsonString, true);  // 加第二个参数和不加的区别

* php_uname()  //  返回运行 PHP 的系统的有关信息
```php
<?php

echo 'kernel-release：' . php_name('r') . '，kernel-version：' . php_name('v');
```

* file_put_contents()
```php
<?php

$message1 = 'Hello World!';
$message2 = 'This is a test.';
file_put_contents('./1.txt', $message1.PHP_EOL);
file_put_contents('./1.txt', $message2, FILE_APPEND);
```

* error_log()
```php
<?php
$m = new Model('member');
$m->name = 'zhangsan';
if (!$m->save()) {
    // error_log()函数会将新错误信息以追加的形式写入到指定的文件中，而不会将文件中原有的数据覆盖
    error_log('创建会员失败' . PHP_EOL, 3, '/opt/lampp/www/blog/log/error.log');
}
```
