### json_encode()函数让斜杠和unicode字符保持原样输出

* json_encode()函数原型: string json_encode ( mixed $value [, int $options = 0 [, int $depth = 512 ]] )

* PHP 5.4.0	options参数增加常量： JSON_UNESCAPED_SLASHES、JSON_UNESCAPED_UNICODE

* 让斜杠原样输出,不转义斜杠
```
$news = array(
    'title' => '今天天气晴',
    'href' => 'https://www.baidu.com/news/1.html',
    'content' => '今天天气晴,洗衣指数2级...'
);

echo json_encode($news);  // 输出: {"title":"\u4eca\u5929\u5929\u6c14\u6674","href":"https:\/\/www.baidu.com\/news\/1.html","content":"\u4eca\u5929\u5929\u6c14\u6674,\u6d17\u8863\u6307\u65702\u7ea7..."}

echo json_encode($news, JSON_UNESCAPED_SLASHES);  // 输出: {"title":"\u4eca\u5929\u5929\u6c14\u6674","href":"https://www.baidu.com/news/1.html","content":"\u4eca\u5929\u5929\u6c14\u6674,\u6d17\u8863\u6307\u65702\u7ea7..."}
```

* 让unicode字符原样输出
```
$news = array(
    'title' => '今天天气晴',
    'href' => 'https://www.baidu.com/news/1.html',
    'content' => '今天天气晴,洗衣指数2级...'
);

echo json_encode($news);  // 输出: {"title":"\u4eca\u5929\u5929\u6c14\u6674","href":"https:\/\/www.baidu.com\/news\/1.html","content":"\u4eca\u5929\u5929\u6c14\u6674,\u6d17\u8863\u6307\u65702\u7ea7..."}

echo json_encode($news, JSON_UNESCAPED_UNICODE);  // 输出: {"title":"今天天气晴","href":"https:\/\/www.baidu.com\/news\/1.html","content":"今天天气晴,洗衣指数2级..."}
```

* options参数可以一次性使用多个常量值
```
$news = array(
    'title' => '今天天气晴',
    'href' => 'https://www.baidu.com/news/1.html',
    'content' => '今天天气晴,洗衣指数2级...'
);

echo json_encode($news, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);  // 输出: {"title":"今天天气晴","href":"https://www.baidu.com/news/1.html","content":"今天天气晴,洗衣指数2级..."}
```
