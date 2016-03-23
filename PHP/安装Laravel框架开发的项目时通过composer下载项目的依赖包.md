# 安装Laravel框架开发的项目时通过composer下载项目的依赖包

* 下载 https://phphub.org/ 的源码之后需要通过composer下载依赖包才能运行项目。

<pre><code>cd /opt/lampp/www/laravel
curl -sS https://getcomposer.org/installer | php
sudo apt-get install php5-curl
sudo apt-get install php5-gd
php composer.phar install
</pre></code>
