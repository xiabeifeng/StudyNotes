## Ubuntu 系统下使用source包含shell文件出错

在Ubuntu系统下,使用source包含另一个shell文件时出错,若下图所示:有两个shell脚本文件,1.sh和2.sh,在2.sh中使用source包含1.sh,
最后运行2.sh的时候出错:source: not found.

![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/Linux/images/source_not_found_1.png)
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/Linux/images/source_not_found_2.png)
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/Linux/images/source_not_found_3.png)

解决办法如下:<br />
1. ```ls -l `which sh` ```<br />
    查看系统当前使用的shell(通过该命令执行的结果可以看到当前使用的shell是dash)<br />
2. ```sudo dpkg-reconfigure dash ```<br />
    在弹出的可视化窗口中,选择"否",默认不使用dash作为系统shell.<br />
3. ```ls -l `which sh` ```<br />
    现在可以看到系统使用bash作为默认shell.<br />
