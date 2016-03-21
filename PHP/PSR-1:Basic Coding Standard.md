# PSR-1:Basic Coding Standard

* 文件必须仅使用 <?php ？> 或者 <?= ?>标记。

* 文件编码必须且仅使用 UTF-8 without BOM 编码。

* A file SHOULD declare new symbols (classes, functions, constants, etc.) and cause no other side effects, or it SHOULD execute logic with side effects, but SHOULD NOT do both. The following is an example of a file with both declarations and side effects; i.e, an example of what to avoid: 
<pre><code><?php
    ini_set('error_reporting', E_ALL);  // side effect: change ini settings
    include "file.php";                 // side effect: loads a file
    echo "<html>\n";                          // side effect: generates output
    function foo()                      // declaration
    {
        // function body
    }
?>
</pre></code>

* 命令空间和类需要遵循PSR-0和PSR-4。
<pre><code>一个文件中只定义一个类
</pre></code>
* 类名必须以 StudlyCaps 命名方式进行命名。
 
* 类的常量名必须全部是大写字母，以下划线分割。

* 方法名必须以 camelCase 命名方式进行命名。
