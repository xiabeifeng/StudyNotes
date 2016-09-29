### 一些sql语句

* 使用MySQL聚合函数格式化时间戳
```sql
SELECT FROM_UNIXTIME((`end_time` - unix_timestamp()), "%d天 %H:%i:%s") AS `time_Left_to_end` FROM `activity`;
```

* 使用find_in_set()判断集合中是否存在某个指定元素
```sql
SELECT COUNT(`id`) AS product_number FROM `product` WHERE find_in_set("男装", tags); // tags字段的值是由‘,’拼接的商品标签字符串，例如"男装,时尚,经典"
```

* 使用case when ... then end实现条件排序
```sql
// 查询所有的商品，如果是上架的商品(status = 1)按照上架时间(on_time)降序排列，如果是下架的商品(status = 0)则按照下架时间(off_time)降序排列
SELECT * FROM product ORDER BY CASE WHEN status = 1 THEN on_time END DESC,CASE WHEN status = 0 THEN off_time END DESC;
```
