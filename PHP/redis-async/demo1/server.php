<?php
/**
 * 异步处理 服务端程序
 * @date 2016-08-09
 */

ini_set('default_socket_timeout', -1);  // socket没有时间限制
ini_set('set_time_limit', 0);           // php脚本执行时间不限制

$redis = new Redis();
$conn = $redis->connect('192.168.18.252', 6379);
if ($conn) {
    $redis->subscribe(array('emails'), 'sendEmail');    // 订阅emails频道并使用自定义的回调函数处理接受到的信息
} else {
    echo 'Redis connect failed!';
}

function sendEmail($redis, $channel, $data)
{
    $email = $data;
    if ($email) {
        // 发邮件
        $result = Email::send($email);
        if ($result) {
            // 我们可以使用 `tail -f emails_send_success.txt` 命令动态实时监控异步处理的效果(客户端程序给客户的响应是已经处理成功，而服务端程序其实还在有条不紊地发送邮件)
            file_put_contents('./emails_send_success.txt', $email . PHP_EOL, FILE_APPEND);
        } else {
            file_put_contents('./emails_send_fail.txt', $email . PHP_EOL, FILE_APPEND);        
        }
    }
}
