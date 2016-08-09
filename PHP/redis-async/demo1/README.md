### Redis 发布-订阅模式 实现异步处理

* 前提条件：安装redis server，安装php redis扩展，运行服务端异步处理php程序

* 客户端执行一项耗时任务(例如大批量发送邮件)，我们使用Redis的publish命令将信息发送到指定的频道，而服务端有一个常驻PHP进程通过Redis的subscribe命令订阅指定的一个或多个频道的信息。
