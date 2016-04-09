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
