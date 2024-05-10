<?php
namespace Base\src;
/**
 * Created by : PhpStorm
 * User: 移动的羊驼-TZH-apple
 * Date: 2024/5/10
 * Time: 上午10:47
 */
class Base
{
    public function getTime()
    {
        return date('Y-m-d H:i:s');
    }

    public function getDay()
    {
        return date('Y-m-d');
    }

    public function getYesterday()
    {
        return date('Y-m-d', strtotime('-1 day'));
    }
}