# 常用的函数

* 在计算价格的时候,我们最好使用sprintf()函数将价格格式化并保留2位小数,不然的话，我们在显示价格的时候有可能有很多位小数点。
```php
$price = sprintf('%.2f', $originalPrice * $discount);    // 商品价格 = 原价 * 折扣
```

* json_decode($jsonString, true);  // 加第二个参数和不加的区别

* php_uname()  //  返回运行 PHP 的系统的有关信息
```php
echo 'kernel-release：' . php_name('r') . '，kernel-version：' . php_name('v');
```

* file_put_contents()
```php
$message1 = 'Hello World!';
$message2 = 'This is a test.';
file_put_contents('./1.txt', $message1.PHP_EOL);
file_put_contents('./1.txt', $message2, FILE_APPEND);
```

* error_log()
```php
$m = new Model('member');
$m->name = 'zhangsan';
if (!$m->save()) {
    // error_log()函数会将新错误信息以追加的形式写入到指定的文件中，而不会将文件中原有的数据覆盖
    error_log('创建会员失败' . PHP_EOL, 3, '/opt/lampp/www/blog/log/error.log');
}
```

* preg_replace_callback()
```php
// 将给定字符串中的数字前加上人民币符号
$content = "白菜价格：6.5; 土豆价格：8";
$pattern = '/(\d+(\.\d+)?)/'; // 匹配正整数或正的小数
$content = preg_replace_callback($pattern, function($match){return '￥'.$match[0];}, $content);
echo $content;
```

* array_fill()    // 按指定的元素的个数和值填充数组
```php
// 使用预处理占位符?和SQL IN关键字的时候可以使用array_fill()
$orderIdArray = array(1, 3, 5, 8);
$db = DB::get_db();
$sql = 'SELECT SUM(money) FROM order WHERE order_id IN (' . array_fill(0, count($orderIdArray), '?') . ')';
$result = $db->query($sql, $orderIdArray);
```

* array array_column ( array $input , mixed $column_key [, mixed $index_key ] )    // 返回二维数组中指定的一列
```php
$m = new Model('user');
$result = $m->where(array('sex' => 1))->select();
$users = array_column($result, 'username', 'id');
```

* array array_merge_recursive ( array $array1 [, array $... ] )    // 递归地合并一个或多个数组
