### java数组及其应用

* java语言定义数组的时候，元素的个数必须给出。数组一旦被定义，则长度不能被改变，即不能越界，因此我们可以接收用户指定的数组的长度作为数组的长度。java编译器不会检查数组元素越界的问题，但是如果数组越界了，则程序在运行时会抛出异常。
```java
int[] ages = new int[10];
int[] ages = {1,2,3,4,5,6,7,8,9,10};
int[] ages = new int[]{1,2,3,4,5,6,7,8,9,10};
int len = ages.length;
```

* 写一个程序，输入数量不确定的[0-9]范围内的整数，统计每一种数字出现的次数，输入-1表示程序结束。
```java
package hello;

import java.util.Scanner;

public class Hello {
	
	public static void main (String[] args) {
		Scanner in = new Scanner(System.in);
		try {
			// 写一个程序，输入数量不确定的[0-9]范围内的整数，统计每一种数字出现的次数，输入-1表示程序结束。
			int[] base = new int[10];
			int t = in.nextInt();
			
			while (t != -1 && t >= 0 && t <= 9) {
				base[t]++;
				t = in.nextInt();
			}
			
			for (int i = 0; i < base.length; i++) {
				if (base[i] > 0) {
					System.out.println(i + "出现的次数是：" + base[i] + "次");
				}
			}
		} finally {
			in.close();
		}
	}

}
```
