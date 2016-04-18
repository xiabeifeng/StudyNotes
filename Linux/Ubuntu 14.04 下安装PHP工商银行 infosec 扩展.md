## Ubuntu 14.04 下安装PHP工商银行 infosec 扩展
* 成功安装infosec扩展的截图

![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/Linux/images/infosec.png)

* 首先确保你服务器的php版本与工商银行提供的infosec扩展对应的版本一致，否则，无法安装成功。
例如，如果你的服务器php版本是5.5.19，那么工商银行提供的infosec扩展也必须要兼容php5.5.19版本。

* 创建/usr/local/lib/infosec目录。
```
cd /usr/local/lib
sudo mkdir infosec
```

* 将工商银行提供的三个动态库文件：libcrypto.so、libcrypto.so.1.0.0、libinfosec_api.so 复制到 /usr/local/lib/infosec目录下。

* 修改动态库加载配置文件 /etc/ld.so.conf
```
sudo echo "/usr/local/lib/infosec/" >> /etc/ld.so.conf
ldconfig
```

* 通过phpinfo()查看php扩展的安装路径，然后将工商银行提供的php_mod5.*目录下的infosec.so文件复制到php的扩展安装路径下。

* 修改php.ini文件，加入如下内容：
```
extension = infosec.so
enable_dl = Off    // php5.3以后的版本,必须是Off,以前的版本为On
```

* 重启php进程，查看phpinfo()的结果页面，看是否能找到infosec扩展，
如果没找到，则查看php的错误日志文件php_errors.log，看有没有产生新的错误信息，根据错误信息排错。
