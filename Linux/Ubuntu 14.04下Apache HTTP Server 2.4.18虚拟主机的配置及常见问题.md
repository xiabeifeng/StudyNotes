# Ubuntu 14.04下Apache HTTP Server 2.4.18虚拟主机的配置及常见问题

* 修改/etc/hosts文件
<pre><code>sudo vi /etc/hosts
在文件末尾加上一行：127.0.0.1   www.linux.dev
</code></pre>

* 创建web项目文件夹/var/www/linux及测试文件/var/www/linux/index.html
<pre><code>cd /var/www
mkdir linux
cd linux
touch index.html
</code></pre>

* 创建虚拟主机日志目录/var/log/apache2/linux
<pre><code>cd /var/log/apache2
sudo mkdir linux
sudo chgrp adm linux
</code></pre>

* 新建/etc/apache2/sites-available/linux.conf
<pre><code>cd /etc/apache2/sites-available
sudo cp 000-default.conf linux.conf
</code></pre>

* 修改/etc/apache2/sites-available/linux.conf文件
<pre><code>将ServerName的值改成www.linux.dev
将DocumentRoot的值改成/var/www/linux
将ErrorLog的值改成${APACHE_LOG_DIR}linux/error.log
将Customlog的值改成${APACHE_LOG_DIR}linux/access.log
</code></pre>

* 重载apache2服务
<pre><code>service apache2 reload
这个时候，可能会报错，错误如下：
apache2: Could not reliably determine the server's fully qualified domain name, 
using 127.0.1.1 for ServerName
解决办法是在/etc/init.d/apache2/apache2.conf文件中加入：ServerName localhost:80
</code></pre>

* 开启linux.conf虚拟主机配置
<pre><code>sudo a2ensite linux
</code></pre>

