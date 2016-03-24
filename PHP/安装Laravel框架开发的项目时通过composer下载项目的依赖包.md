# 安装Laravel框架开发的项目时通过composer下载项目的依赖包

* 下载 https://phphub.org/ 的源码之后需要通过composer下载依赖包才能运行项目。

* 下载composer.phar文件
<pre><code>cd /opt/lampp/www/laravel
curl -sS https://getcomposer.org/installer | php
</pre></code>

* 安装项目需要的php扩展
<pre><code>sudo apt-get install php5-curl
sudo apt-get install php5-gd
sudo apt-get install php5-mcrypt
</pre></code>

> php可用扩展目录：/etc/php5/mods-available

> php已开启扩展目录：/etc/php5/cli/conf.d

* php-mcrypt安装好后默认没有开启，需要我们自己创建软链接文件开启
<pre><code>cd /etc/php5/cli/conf.d
sudo ln -s ../../mods-available/mcrypt.ini ./20-mcrypt.ini
</pre></code>

* 通过composer安装Laravel项目所需的php组件
<pre><code>php composer.phar install
</pre></code>
