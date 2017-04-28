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

* 使用case when ... then end实现三次排序
```sql
// 查询用户表，先根据过期时间来分成两大类：已过期用户，未过期用户；然后在这个基础上，在每一个大类内部根据权重(weight)和创建时间(create_time)进行二次、三次排序
$sql = "SELECT * FROM users ORDER BY (CASE WHEN expire_time > '" . date('Y-m-d H:i:s') . "' THEN 1 ELSE 0 END) DESC, weight DESC, create_time DESC";
```
