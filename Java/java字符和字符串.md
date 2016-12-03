### java字符和字符串

* java字符
```java
package hello;

import java.util.Scanner;

public class Hello {
	
	public static void main (String[] args) {
		Scanner in = new Scanner(System.in);
		
		char a = 'A';    // 用单引号表示的字符字面量
		char b = '1';
		char c = '夏';    // java使用Unicode来表示字符，可以表达包括汉字在内的多种文字
		System.out.println(a);
		System.out.println(b);
		System.out.println(c);
		
		in.close();
	}
	
}

```

* 比较两个字符串变量的内容是否相同使用equals()方法；比较两个字符串变量是不是同一个东西用==
```java
package hello;

import java.util.Scanner;

public class Hello {
	
	public static void main(String[] args){
		// 比较两个字符串变量的内容是否相同不能使用==，而需要使用equals()方法
		Scanner in = new Scanner(System.in);
		String a = "Hello World";
		String b = in.nextLine();
		System.out.println(b.equals(a));
	}
}
```

* java字符串对象常用的方法：
```
compareTo()
length()
charAt()
substring()
indexOf()
lastIndexOf()
trim()
startsWith()
endsWith()
replace()
toLowerCase()
toUpperCase()
```
