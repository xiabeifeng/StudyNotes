## shell脚本编程知识点

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
