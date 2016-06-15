# shell脚本编程习题

* 编写一个名为whos的程序,显示排好序的已登陆用户清单,只显示用户名,不要有其他信息.
```shell
who | cut -d ' ' -f1 | sort
```

* 编写一个名为nf的程序,显示当前目录中的文件数.
```shell
dir=`pwd`
number=`ls -l $dir | wc -l`
echo "当前目录的文件数: $(( number - 1))"
```
