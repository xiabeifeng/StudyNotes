# Ubuntu Kylin 15.10下安装PHP pcntl扩展

我的办公电脑安装的操作系统为Ubuntu Kylin 15.10，在已经通过XAMPP搭建好了PHP开发环境的情况下如何安装PHP pcntl扩展呢？

下面是安装的步骤：

* 通过phpinfo()的结果获知你当前运行的php版本是多少，例如：5.5.19

* 在php官网上下载对应php版本的源代码到自己的家目录并解压缩

>  cd /home/xiabeifeng

>  tar -zxvf php-5.5.19.tar.gz

>  cd /home/xiabeifeng/php-5.5.19/ext/pcntl

>  sudo /opt/lampp/bin/phpize

>  ./configure --with-php-config=/opt/lampp/bin/php-config

>  make

>  make install
  
* 安装好后（pcntl.so被安装到了**/opt/lampp/lib/php/extensions**目录下面），需要编辑php.ini文件,加入 extension = pcntl.so

>  sudo vi /opt/lampp/etc/php.ini
 
* 然后重启xampp
  
>  sudo /opt/lampp/lampp restart

* 重启后再通过phpinfo()打印出相关信息，搜索"pcntl",就可以看到pcntl已经开启了
