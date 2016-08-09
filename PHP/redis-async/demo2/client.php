<?php
/**
 * 异步处理 客户端程序
 * @date 2016-08-09
 */

$redis = new Redis();
$conn = $redis->connect('192.168.18.252', 6379);
if ($conn) {
    // 查询出所有会员的邮箱，给这些邮箱批量发送邮件
    $m = new Model('member');
    $emails = $m->field('email')->list_all_array();
    foreach ($emails as $v) {
        $result = $redis->lpush('emails', $v['email']);
        if (!$result) {
            file_put_contents('./emails_insert_queue_failed.txt', $v['email'] . PHP_EOL, FILE_APPEND);
        }
    }
    echo 'Success.';
} else {
    echo 'Redis connect failed!';
}
