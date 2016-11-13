### Java基础

* java开发工具：Eclipse IDE for Java Developers（eclipse官网下载）、JRE（java.oracle.com下载）

* 常用代码：
```java
package hello;

import java.util.Scanner;

public class Hello {
    public static void main (String[] args) {
        Scanner in = new Scanner(System.in);
		try {
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
		} finally {
			in.close();
		}
    }
}
```

* final int amount = 100;  // 定义一个常量amount

* 在Eclipse IDE for Java Developers中，Shift+上下方向键可以向上或向下选中代码行，然后按Ctrl+/可以注释掉选中代码行或取消掉注释。

* 10和10.0在java中是两个完全不同的数，10.0是浮点数。当浮点数和整数放在一起运算时，Java会将整数转换成浮点数，然后进行浮点数的运算。

* 判断两个浮点数是否相等采用的方法是Math.abs(a-b) < 1e-6
