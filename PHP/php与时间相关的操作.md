### php与时间相关的操作

* php获取今日、本周、本月的开始时间和结束时间时间戳
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
* 根据年月参数返回该月份的天数
```php
/**
 * 根据年月返回该月份具有的天数
 *
 * @param intval $year 年份
 * @param intval $month 月份
 */
function getDaysNumber($year, $month)
{
    return date('t', strtotime($year . '-' . $month));
}
```

* 根据月份返回该月份的英文单词
```php
/**
 * 根据月份返回该月份的英文单词
 *
 * @param intval $month
 */
function getMonthWord($month)
{
    if ($month > 0 && $month < 13) {
        $monthWord = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        return $monthWord[$month - 1];
    } else {
        return false;
    }
}
```
