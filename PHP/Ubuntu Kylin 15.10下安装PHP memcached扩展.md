## Ubuntu Kylin 15.10下安装PHP memcached扩展

A. 下载安装libmemcached(如果libmemcached没安装的话,配置memcached的时候会报"checking for libmemcached location... configure: error: memcached support requires libmemcached. Use --with-libmemcached-dir=\<DIR\> to specify the prefix where libmemcached headers and library are located"的错误)
```shell
	su -
	wget https://launchpad.net/libmemcached/1.0/1.0.18/+download/libmemcached-1.0.18.tar.gz
	tar -zxvf libmemcached-1.0.18.tar.gz
	cd libmemcached-1.0.18
	./configure --prefix=/usr/local/libmemcached
	make && make install
```
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/libmemcached_configure.png)
B. 在pecl官网 http://pecl.php.net/package/memcached 上下载memcached,然后安装
```shell
	wget http://pecl.php.net/get/memcached-2.2.0.tgz
	tar -zxvf memcached-2.2.0.tgz
	cd memcached-2.2.0
	./configure --with-php-config=/opt/lampp/bin/php-config --with-libmemcached-dir=/usr/local/libmemcached --disable-memcached-sasl
	make && make install
```

C. 在php.ini中加载memcached扩展
```
	extension="memcached.so"
```

D. 重启web服务
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/php_memcached_extension.png)
