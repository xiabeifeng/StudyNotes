<?php
/**
 * @author xiabeifeng
 * @date 2016-11-08
 * @explain 根据特定概率抽奖
 */

// 变量初始化
$totalSample = array();                                                         // 总样本
$winList = array();                                                             // 中奖人员id集合
$probability = isset($_GET['probability']) ? intval($_GET['probability']) : 50; // 中奖概率为 $probability / 100
$currentMid = isset($_GET['mid']) ? intval($_GET['mid']) : 1;                   // 当前会员id

// 生成总样本数据
for ($i = 0; $i < 100; $i++) {
    $totalSample[] = $currentMid + $i; 
}

// 抽奖
for ($i = 0; $i < $probability; $i++) {
    shuffle($totalSample);
    $winList[] = array_pop($totalSample);
}

// 输出中奖结果
if (in_array($currentMid, $winList)) {
    echo '恭喜您，会员id为'. $currentMid . '的会员在本次抽奖活动中获奖';
} else {
    echo '很遗憾，会员id为'. $currentMid . '的会员在本次抽奖活动中没有获奖！';
}
