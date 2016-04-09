# PHP包管理器Composer的安装及使用

* 如何安装Composer?
```
1. curl -sS https://getcomposer.org/installer | php
   说明：
   (1)-s表示静默模式，不输出任何东西。-S表示当有错误发生的时候显示错误信息。-sS表示除了显示错误信息，其余的信息都不显示。
   (2)这个命令使用curl下载Composer的安装脚本，然后交给php去执行，最后在当前目录下创建composer.phar文件。
   (3)composer.phar文件是Composer的二进制文件。
   (4)千万不要盲目执行从远程URL下载的代码。我们要先查看远程代码，弄清它的作用。而且一定要通过HTTPS下载远程代码。
2. sudo mv composer.phar /usr/local/bin/composer
   说明：将composer.phar文件移动到/usr/local/bin目录下，并重命名为composer
3. sudo chmod +x /usr/local/bin/composer
   说明：增加执行权限
4. 在~/.bash_profile文件中将/usr/local/bin目录追加到PATH环境变量中
   说明：这样的话，我们就可以直接使用composer命令进行操作了，而不再需要使用php composer.phar
```

* 如何使用Composer下载项目所需的PHP组件?
```
1. 每个PHP组件的名称都由厂商名和包名组成，例如league/flysystem
2. 厂商名全局唯一，厂商名下的包名在该厂商名下唯一
3. composer require xiabeifeng/express-query
   说明：
   (1)如果你之前没下载过xiabeifeng/express-query组件，则该命令会下载组件的最新稳定版本。
   (2)如果你之前下载过xiabeifeng/express-query组件的低版本，则该命令会将低版本升级到下一个主版本之前的最新版。
      例如：你之前下载了1.0.0版本，则会升级为1.1.0版本（同一主版本号下的最新版本）。
   (3)执行该命令会创建composer.json和composer.lock文件或更新composer.json和composer.lock文件。
   (4)composer.json和composer.lock文件都需要纳入到版本控制系统。
```

* 语言版本
```
现代的PHP组件都使用语义版本方案(http://semver.org/)，版本号由三个点(.)分数字组成(例如1.13.2)。
第一个数字是主版本号，如果PHP组件的更新破坏了向后兼容性，会提升主版本号。
第二个数字是次版本号，如果PHP组件小幅更新了功能，而且没破坏向后兼容性，会提升次版本号。
第三个数字是修订版本号，如果PHP修正了向后兼容的缺陷，会提升修订版本号。
```




