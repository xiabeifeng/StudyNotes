### 一些sql语句

* 使用MySQL聚合函数格式化时间戳
```sql
SELECT FROM_UNIXTIME((`end_time` - unix_timestamp()), "%d天 %H:%i:%s") AS `time_Left_to_end` FROM `activity`;
```

* 使用find_in_set()判断集合中是否存在某个指定元素
```sql
SELECT COUNT(`id`) AS product_number FROM `product` WHERE find_in_set("男装", tags); // tags字段的值是由‘,’拼接的商品标签字符串，例如"男装,时尚,经典"
```
