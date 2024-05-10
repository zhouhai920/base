<?php

namespace Base\src;
/**
 * Created by : PhpStorm
 * User: 移动的羊驼-TZH-apple
 * Date: 2024/5/10
 * Time: 上午10:47
 */
class BaseTime
{
    /**
     * Notes：当前时间Y-m-d H:i:s
     * User：移动的羊驼-TZH-apple
     * Date：2024/5/10
     * Time：上午11:33
     * @return false|string
     */
    public function getTime()
    {
        return date('Y-m-d H:i:s');
    }

    /**
     * Notes：今天Y-m-d
     * User：移动的羊驼-TZH-apple
     * Date：2024/5/10
     * Time：上午11:32
     * @return false|string
     */
    public function getDay()
    {
        return date('Y-m-d');
    }

    /**
     * Notes：获取昨天的日期Y-m-d
     * User：移动的羊驼-TZH-apple
     * Date：2024/5/10
     * Time：上午11:32
     * @return false|string
     */
    public function getYesterday()
    {
        return date('Y-m-d', strtotime('-1 day'));
    }

    /**
     * Notes：获取今天是星期几0-6
     * User：移动的羊驼-TZH-apple
     * Date：2024/5/10
     * Time：上午11:29
     * @return false|string
     */
    public function getWeek()
    {
        return date('w');
    }

    /**
     * Notes：获取当前季度的开始日期和结束日期
     * User：移动的羊驼-TZH-apple
     * Date：2024/5/10
     * Time：上午11:29
     * @return array
     */
    public function getCurrentQuarterDates(): array
    {
        $currentMonth = date('n');
        $currentYear = date('Y');

        // 计算当前季度的开始月份和结束月份
        $startMonth = floor(($currentMonth - 1) / 3) * 3 + 1;
        $endMonth = $startMonth + 2;

        // 构建开始日期和结束日期的字符串
        $startDateStr = "{$currentYear}-{$startMonth}-01";
        $endDateStr = "{$currentYear}-{$endMonth}-" . date('t', strtotime("{$currentYear}-{$endMonth}-01"));

        // 使用 strtotime 函数将日期字符串转换为日期对象
        $startDate = date_create($startDateStr);
        $endDate = date_create($endDateStr);

        // 返回结果
        return array(
            'start_date' => $startDate,
            'end_date' => $endDate
        );
    }
}