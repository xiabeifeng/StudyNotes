### 使用PHPExcel导出Excel文件某些数据丢失

* 做基于微信公众号的Web开发的时候,系统中可能会将用户的微信昵称存储下来,并且可能需要在导出的Excel文件中包含微信昵称,但是会存在导出的Excel文件中某些数据丢失的情况(如下图所示),原因可能是微信昵称中包含了Emoji表情特殊符号,解决办法就是将Emoji表情特殊字符过滤即可.
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/phpexcel_lost_data.png)

* 过滤Emoji表情的函数:
```php
function filterEmoji($emojiStr)
{
    $cleanStr = '';
    $len = mb_strlen($emojiStr, 'utf-8');
    for ($i = 0; $i < $len; $i++) {
        $temp = mb_substr($emojiStr, $i, 1, 'utf-8');
        if (strlen($temp) < 4) {
            $cleanStr .= $temp;
        }
    }
    
    return $cleanStr;
}
```
