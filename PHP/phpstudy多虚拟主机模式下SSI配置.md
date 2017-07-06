### phpstudy多虚拟主机模式下SSI配置

* 修改http.conf文件，将如下代码前的注释去掉
```
# AddType text/html .shtml
# AddOutputFilter INCLUDES .shtml
```

* 修改http.conf文件，在如下代码后面增加 +Includes
```
Options +Indexes +FollowSymLinks +ExecCGI
```
增加后变成如下所示：
```
Options +Indexes +FollowSymLinks +ExecCGI +Includes
```

* 修改vhosts.conf文件，在Options FollowSymLinks ExecCGI后面增加Includes
```
<VirtualHost *:80>
    DocumentRoot "D:\phpStudy\WWW\blog\public"
    ServerName www.blog.test
    ServerAlias www.blog.test
  <Directory "D:\phpStudy\WWW\blog\public">
      Options FollowSymLinks ExecCGI
      AllowOverride All
      Order allow,deny
      Allow from all
      Require all granted
  </Directory>
</VirtualHost>
```
增加后变成如下所示：
```
<VirtualHost *:80>
    DocumentRoot "D:\phpStudy\WWW\blog\public"
    ServerName www.blog.test
    ServerAlias www.blog.test
  <Directory "D:\phpStudy\WWW\blog\public">
      Options FollowSymLinks ExecCGI Includes
      AllowOverride All
      Order allow,deny
      Allow from all
      Require all granted
  </Directory>
</VirtualHost>
```
