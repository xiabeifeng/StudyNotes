### 一些sql语句

* 使用MySQL聚合函数格式化时间戳
```sql
SELECT FROM_UNIXTIME((`end_time` - unix_timestamp()), "%d天 %H:%i:%s") AS `time_Left_to_end` FROM `activity`;
```
