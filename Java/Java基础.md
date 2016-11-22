### Java基础

* java开发工具：Eclipse IDE for Java Developers（eclipse官网下载）、JRE（java.oracle.com下载）

* 常用代码：
```java
package hello;

import java.util.Scanner;

public class Hello {
    public static void main (String[] args) {
        Scanner in = new Scanner(System.in);
		
		int num = 0;
		int sum = 0;
		int t = 0;
		System.out.println("请输入一系列整数，最后输入-1表示结束：");
			
		do {
			t = in.nextInt();
			if (t > 0) {
				num++;
				sum += t;
			}
		} while (t != -1);
			
		System.out.println("您输入了" + num + "个正整数。");
		System.out.println("平均数是：" + (double)sum / num);
		in.close();
    }
}
```

* final int amount = 100;  // 定义一个常量amount

* 在Eclipse IDE for Java Developers中，Shift+上下方向键可以向上或向下选中代码行，然后按Ctrl+/可以注释掉选中代码行或取消掉注释。

* 10和10.0在java中是两个完全不同的数，10.0是浮点数。当浮点数和整数放在一起运算时，Java会将整数转换成浮点数，然后进行浮点数的运算。

* 判断两个浮点数是否相等采用的方法是Math.abs(a-b) < 1e-6

* 常见的转义字符(逃逸字符):
```
\t	使得输出从下一个制表位开始
\r	回车
\n	换行
```

* 包裹类型
```
每种基础类型都有对应的包裹类型
boolean 对应 Boolean
char 对应 Character
int 对应 Integer
double 对应 Double

包裹类型的好处是给我们提供了一些属性
Integer.MAX_VALUE	// Java的int类型在内存中是4个字节,也就是32个比特,可表示的范围是 -2^31 ~ (2^31 - 1)
Integer.MIN_VALUE
Character.isDigit()
Character.toLowerCase()
```
