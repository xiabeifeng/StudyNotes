### java字符和字符串

* java字符
```java
package hello;

import java.util.Scanner;

public class Hello {
	
	public static void main (String[] args) {
		Scanner in = new Scanner(System.in);
		try {
			char a = 'A';    // 用单引号表示的字符字面量
			char b = '1';
			char c = '夏';    // java使用Unicode来表示字符，可以表达包括汉字在内的多种文字
			System.out.println(a);
			System.out.println(b);
			System.out.println(c);
		} finally {
			in.close();
		}
	}
	
}

```
