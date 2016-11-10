## Ubuntu下apache服务器配置https访问

* 在配置https访问之前，请确保httpd.conf配置文件中加载了ssl模块，并且加载了httpd-ssl.conf文件，此处不再赘述操作细节。

* 生成server.key文件和server.crt文件
```shell
sudo openssl genrsa 1024 > server.key    # 用128位rsa算法生成密钥，得到server.key文件
sudo openssl req -new -key server.key > server.csr    # 生成证书请求文件
sudo openssl req -x509 -days 365 -key server.key -in server.csr > server.crt    # 用密钥和证书请求生成证书server.crt，-days参数指明证书有效期，单位为天
```

* 修改httpd-ssl.conf文件中的DocumentRoot、SSLCertificateFile、SSLCertificateKeyFile这三个配置选项的值
```
DocumentRoot配置选项的值和你的httpd.conf文件中DocumentRoot配置选项的值一致。
SSLCertificateFile配置选项的值是你的server.crt文件的完整路径
SSLCertificateKeyFile配置选项的值是你的server.key文件的完整路径
```

* 修改httpd-ssl.conf文件，增加虚拟主机配置
```
<VirtualHost *:443>
    # General setup for the virtual host
    DocumentRoot "/opt/lampp/www/blog"
    ServerName www.blog.test:443
    ServerAdmin 840679824@qq.com
    ErrorLog "/opt/lampp/logs/https_blog_error_log"
    TransferLog "/opt/lampp/logs/https_blog_access_log"
    
    # SSL Engine Switch:
    SSLEngine on
    
    # Server Certificate:
    SSLCertificateFile "/opt/lampp/etc/ssl.crt/server.crt"
    
    # Server Private Key:
    SSLCertificateKeyFile "/opt/lampp/etc/ssl.key/server.key"
</VirtualHost>
```

* 重启apache服务器

* 另外，需要在代码层面进行判断，如果是通过http访问的，则需要跳转到https访问：
```php
if (!isset($_SERVER['HTTPS']) || $_SERVER['SERVER_PORT'] == '80') {
    Conf::$baseUrl = 'https://' . $_SERVER ['HTTP_HOST'] . '/';
}
```

* 另外，也可以配置.htaccess文件来实现http访问直接跳转到以https方式访问
```
RewriteEngine on
RewriteCond %{SERVER_PORT} !^443$
RewriteRule ^.*$ https://%{SERVER_NAME}%{REQUEST_URI} [L,R]
```
