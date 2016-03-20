# Ubuntu下安装Apache HTTP Server

* 添加Apache HTTP Server最新版本(2.4.18)的ppa
<pre><code>sudo add-apt-repository ppa:ondrej/apache2
</code></pre>

* Ubuntu会缓存所有可用的软件，因此添加新软件源之后，要刷新这个缓存：
<pre><code>sudo apt-get update
</code></pre>

* 安装
<pre><code>sudo apt-get install apache2
</code></pre>

* 安装成功
<pre><code>apache2 -v
</code></pre>

* 一些注意事项：
<pre><code>/etc/apache2/apache2.conf是主配置文件
The default Debian document root is */var/www/html*
开启apache:sudo /etc/init.d/apache2 start
停止apache:sudo /etc/init.d/apache2 stop
查看apache状态:/etc/init.d/apache2 status</code></pre>
