## shell脚本编程知识点

* shell变量名的命名规则: 以字母或下划线开头,后面可以跟0个或多个数字或者字母或者下划线

* 关于shell两重if判断问题
```shell
#!/bin/bash

a=true
b=false
if [ $a ]
then
    echo "a是true"
    if [ !$b ]
        then
            echo "a是true,b是false"
    else
        echo "a是true,b也是true"
    fi
fi
```

* shell是一种弱类型的语言:变量在使用之前不需要先声明;声明变量的时候不需要指定变量类型.

* 因为shell是解释型语言,因此可以在终端上直接给变量赋值:
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/Linux/images/terminal_shell.png)

* shell命令也能存储在变量中,然后被shell解析执行
```shell
xiabeifeng@ubuntu-xiabeifeng:~/shell/shell_learn$ act=who
xiabeifeng@ubuntu-xiabeifeng:~/shell/shell_learn$ $act | wc -l
```

* shell变量为空值的3种情况:没有赋值; 赋值单引号空字符串; 赋值双引号空字符串.
 
* 一个变量的值中含有 * 字符. 如果该变量被单引号包含,则 * 会被替换成当前目录下的所有文件名; 如果该变量被双引号包含,则 * 会原样输出. 所以,如果想替换变量的值,又不希望shell把替换的内容作特殊字符对待,就应该把变量名括在双引号中.
![Aaron Swartz](https://raw.githubusercontent.com/xiabeifeng/study-notes/master/Linux/images/replace_filename.png)

* 命令替换: 命令替换是指shell能够将一个命令的标准输出插在一个命令行中任何位置的功能. Shell有两种方法作命令替换: 把shell命令用反引号或者$(...)结构括起来.
```shell
ls -l `pwd`
ls -l $(pwd)
```

