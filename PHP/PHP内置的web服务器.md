# PHP内置的web服务器

PHP5.4之后,你可以不用安装和配置功能齐全的Web服务器，就可以开始学习PHP。步骤如下：

* 在家目录下创建一个项目文件夹blog

>   cd 

>   mkdir blog

>   cd blog

* 然后执行下面的命令启动内置web服务器

>   php -S localhost:8000

* 创建一个测试文件index.php

>   touch index.php

>   文件内容为  <?php   phpinfo();
