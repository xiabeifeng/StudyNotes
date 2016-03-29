<?php
/**
 * @explain php redis的使用
 * @date 2016-03-28
 * @author xiabeifeng
 */
 
 $redis = new Redis();
 
 // 连接redis服务器
 try {
    $link = $redis->connect('127.0.0.1', 6379);
    if (!$link) {
        throw new RedisException('Connect redis failed!');
    } 
 } catch (RedisException $e) {
    die($e->getMessage());
 }
 
 // exists()、get()、set()
 $key = 'author';
 if (!$redis->exists($key)) {
    $redis->set($key, 'xiabeifeng');
 }
 echo $redis->get($key);
 
