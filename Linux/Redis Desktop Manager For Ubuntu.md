# Redis Desktop Manager For Ubuntu

* Redis Desktop Manager为Ubuntu提供了64位 .deb软件包(如果你的电脑是32位架构，则需要下载源码安装)

* 下载源码
<pre><code>cd ~/下载
wget https://github.com/uglide/RedisDesktopManager/releases/download/0.8.3/RedisDesktopManager-0.8.3.tar.gz
</code></pre>

* 安装
<pre><code>sudo chmod -R 777 RedisDesktopManager-0.8.3.tar.gz
tar -zxvf RedisDesktopManager-0.8.3.tar.gz
cd RedisDesktopManager-0.8.3
cd src
./configure
source /opt/qt54/bin/qt54-env.sh && qmake && make
</code></pre>
