# 常用的函数

1. 在计算价格的时候,我们最好使用sprintf()函数将价格格式化并保留2位小数,不然的话，我们在显示价格的时候有可能有很多位小数点。
<pre><code>$price = sprintf('%.2f', $originalPrice * $discount);    //商品价格 = 原价 * 折扣
</code></pre>

2. json_decode($jsonString, true);  // 加第二个参数和不加的区别

3. php_uname()  //  返回运行 PHP 的系统的有关信息
```php
<?php
echo '您的服务器操作系统版本名称是：' . php_name('r') . '，操作系统版本信息：' . php_name('v');
```

