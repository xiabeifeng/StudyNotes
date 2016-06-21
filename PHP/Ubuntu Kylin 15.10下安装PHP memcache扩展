## Ubuntu Kylin 15.10下安装PHP memcache扩展

A. 在pecl官网 http://pecl.php.net/package/memcache 下载memcache扩展源码并解压缩
```shell
	wget http://pecl.php.net/get/memcache-2.2.7.tgz
	tar -zxvf memcache-2.2.7.tgz
```

B. 生成配置文件(由于源码中没有configure文件,因此需要我们使用phpize命令生成configure文件)
```shell
	cd memcache-2.2.7
	/opt/lampp/bin/phpize
```
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/memcache_phpize.png)

C. memcache配置、编译、安装
```shell
    ./configure ----with-php-config=/opt/lampp/bin/php-config
	make && make install
```
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/memcache.so.png)

D. 在php.ini中加载memcached扩展
```
	extension="memcache.so"
```
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/php_memcache_extension.png)

E. 重启web服务
