# Ubuntu Kylin 15.10下安装PHP imagick扩展

* 由于imagick扩展不是php的核心扩展（php源代码扩展目录中没有imagick），因此我们需要在pecl网站 http://pecl.php.net/package/imagick 上下载imagick源码

<pre><code>cd ~/下载
wget http://pecl.php.net/get/imagick-3.3.0.tgz
sudo chmod -R 777 imagick-3.3.0.tgz
tar -zxvf imagick-3.3.0.tgz
cd imagick-3.3.0
</code></pre>

* 编译安装imagick
<pre><code>sudo /opt/lampp/bin/phpize
./configure --with-php-config=/opt/lampp/bin/php-config
make
make install
</code></pre>
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/ubuntu_install_imagick_success.png)

* 在Ubuntu下编译安装的过程中可能会有如下错误信息，这个时候我们需要安装libmagickwand-dev软件包，然后再编译安装即可
<pre><code>sudo apt-get install libmagickwand-dev
</code></pre>
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/ubuntu_install_imagick_error.png)

* 安装好后（imagick.so被安装到了 **/opt/lampp/lib/php/extensions/no-debug-non-zts-20121212/** 目录下面），需要编辑php.ini文件,加入 extension = imagick.so
<pre><code>sudo vi /opt/lampp/etc/php.ini
</code></pre>

* 重启xampp
<pre><code>sudo /opt/lampp/lampp restart
</code></pre>

* 重启后再通过phpinfo()打印出相关信息，搜索"imagick",就可以看到imagick已经开启了
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/PHP/images/phpinfo_imagick.png)
