### php获取今日、本周、本月的开始时间和结束时间时间戳

```php
// 今日开始时间和结束时间时间戳
$todayStartTime = mktime(0, 0, 0);
$todayEndTime = mktime(23, 59, 59);

// 本周开始时间和结束时间时间戳
$weekStartTime = mktime(0, 0, 0, date('m'), date('j') - date('N') + 1, date('Y'));
$weekEndTime = mktime(23, 59, 59, date('m'), date('j') - date('N') + 7, date('Y'));

// 本月开始时间和结束时间时间戳
$monthStartTime = mktime(0, 0, 0, date('m'), 1, date('Y'));
$monthEndTime = mktime(23, 59, 59, date('m'), date('t'), date('Y'));
```
