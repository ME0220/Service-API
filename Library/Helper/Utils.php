<?php
/**
 * Service-API
 * Add: 2016/6/7 11:35
 * Author: Sendya <18x@loacg.com>
 */

namespace Helper;


class Utils
{

    /**
     * 获取随机字符串
     * @param int $length
     * @return string
     */
    public static function randomChar($length = 8)
    {
        // 密码字符集，可任意添加你需要的字符
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $char = '';
        for ($i = 0; $i < $length; $i++) {
            $char .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $char;
    }

}