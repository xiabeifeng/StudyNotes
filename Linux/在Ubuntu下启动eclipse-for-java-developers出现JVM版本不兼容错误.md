# 在Ubuntu下启动eclipse for java developers出现JVM版本不兼容错误

在Ubuntu下启动eclipse for java developers出现JVM版本不兼容错误：Version 1.7.0_95 of the JVM is not suitable for this product. Version: 1.8 or greater is required.

产生错误的原因是：Ubuntu默认使用的jdk版本太低，而下载的eclipse版本比较新。

解决方法：在Debian系列Linux下，可以使用update-alternatives命令来切换某个软件的版本。例如，Ubuntu下，你可能安装了java-7-openjdk和java-8-openjdk，但是你的Eclipse比较新，需要java-8-openjdk才能运行，但是Ubuntu此时默认的又是使用java-7-openjdk，这个时候，就可以使用update-alternatives --config java命令和update-alternatives --config javac命令来选择使用java-8-openjdk。


