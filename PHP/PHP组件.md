# PHP组件.md
* 组件的概念
```
PHP组件是打包的代码，是一系列相关的类、接口和性状，用于解决PHP应用中某个具体的问题。
组件中的类、接口和性状通常放在同一个命名空间中。
大多数现代的PHP框架其实只是构建在小型PHP组件之上的一系列约定。
```
* 为什么使用组件？
```
（1）大部分框架的生态系统比较封闭，很难集成自定义的库或第三方库。
（2）大部分框架会为我们做很多决定，而且要求我们遵守特殊的约定，灵活性较低。
（3）使用优秀的组件可以避免重复造轮子或造不好用的轮子。
（4）组件有助于让代码保持轻量级。
（5）组件具有很大的灵活性，我们可以很容易地把一个组件换成另一个更适合项目的组件。
```
* 好的PHP组件具有的特征
```
（1）作用单一
（2）小型
（3）测试良好
（4）文档完善
```
* 查找组件
```
（1）我们可以在PHP组件目录Packagist中查找现代PHP组件。
（2）Awesome PHP(https://github.com/ziadoz/awesome-php)列出了很多优秀的PHP组件。
```
* 如何使用PHP组件
```
（1）通过Composer安装PHP组件。Composer是PHP组件的依赖管理器，与Linux的软件包管理器yum、aptitude等作用类似。
（2）Composer解决了两大难题：依赖管理和自动加载。Composer有效抽象了依赖管理和自动加载。
```
* 加载PHP文件的方式
```
（1）使用include()、include_once()、require()、require_once()函数手动加载。
（2）使用_autoload()函数实现自定义的自动加载器。
（3）使用sql_autoload_register()函数实现更灵活的自动加载。
（4）使用包管理器Composer自动生成符合PSR标准的自动加载器。
```
* 常用的PHP组件
```
（1）guzzle/http
（2）aura/router、orno/route
（3）aws/aws-sdk-php
（4）league/flysystem
（5）fabpot/php-cs-fixer    // A tool to automatically fix PHP code style
```
