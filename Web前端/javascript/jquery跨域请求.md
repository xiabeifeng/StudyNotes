### jquery跨域请求

* 客户端代码
```js
$(function(){
    var url = 'http://www.blog.test/admin/list?jsoncallback=?';
    $.getJSON(url, function(data){
        if (data.code == 0) {
            // TODO
        } else {
            alert(data.msg);
        }
    });
});
```

* 服务端代码
```php
class Admin
{
    public function list()
    {
        $res['code'] = 0;
        $res['url'] = 'http://www/baidu.com';
        echo $_GET['jsoncallback'] . "(" . json_encode($res) . ")";
    }
}
```
