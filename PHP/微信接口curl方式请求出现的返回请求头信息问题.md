# 微信接口curl方式请求出现的返回请求头信息问题

```php
$token = '123'; // 这种情况下，返回的数据正常
// $token = 'Hello World'; // 这种情况下，返回的数据包含了请求头信息
$url = 'https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=' . $token;
$params = json_encode(array('appid' => 'gh_xiabeifeng', 'appsecret' => '123456'));
echo curl_post($url, $params);

function curl_post($url, $data)
{
    $ch = curl_init();
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => false,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $options);
    $ret = curl_exec($ch);
    
    return $ret;
}
``` 
