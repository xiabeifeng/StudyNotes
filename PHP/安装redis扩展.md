# 安装redis扩展

* 由于redis不是php的核心扩展（php源代码扩展目录中没有redis），因此我们需要在pecl网站 http://pecl.php.net/package/redis 上下载redis源码

<pre><code>cd ~/下载
wget http://pecl.php.net/get/redis-2.2.7.tgz
sudo chmod -R 777 redis-2.2.7.tgz
tar -zxvf redis-2.2.7.tgz
cd redis-2.2.7
</code></pre>

* 编译安装redis
<pre><code>sudo /opt/lampp/bin/phpize
./configure --with-php-config=/opt/lampp/bin/php-config
make
make install
</code></pre>

* 安装好后（redis.so被安装到了 **/opt/lampp/lib/php/extensions/no-debug-non-zts-20121212/** 目录下面），需要编辑php.ini文件,加入 extension = redis.so
<pre><code>sudo vi /opt/lampp/etc/php.ini
</code></pre>

* 重启xampp
<pre><code>sudo /opt/lampp/lampp restart
</code></pre>

* 重启后再通过phpinfo()打印出相关信息，搜索"redis",就可以看到pcntl已经开启了
