## Ubuntu Kylin 15.10下安装PHP memcached扩展

A. 下载安装libmemcached(如果libmemcached没安装的话,配置memcached的时候会报"checking for libmemcached location... configure: error: memcached support requires libmemcached. Use --with-libmemcached-dir=<DIR> to specify the prefix where libmemcached headers and library are located"的错误)
```shell
	su -
	wget https://launchpad.net/libmemcached/1.0/1.0.18/+download/libmemcached-1.0.18.tar.gz
	tar -zxvf libmemcached-1.0.18.tar.gz
	cd libmemcached-1.0.18
	./configure --prefix=/usr/local/libmemcached
	make && make install
```

B. 在pecl官网http://pecl.php.net/package/memcache上下载memcached,然后安装
```shell
	wget http://pecl.php.net/get/memcache-2.2.7.tgz
	tar -zxvf memcache-2.2.7.tgz
	cd memcache-2.2.7
	./configure --with-php-config=/opt/lampp/bin/php-config --with-libmemcached-dir=/usr/local/libmemcached --disable-memcached-sasl
	make && make install
```

C. 在php.ini中加载memcached扩展
```
	extension="memcached.so"
```

D. 重启web服务
