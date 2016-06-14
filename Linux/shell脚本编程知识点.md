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

 

