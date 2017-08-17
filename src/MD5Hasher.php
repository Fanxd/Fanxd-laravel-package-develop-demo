<?php

/**
 * Author: 假如_丶
 * Date: 2017/8/16
 * Time: 16:56
 * Email: 897645119@qq.com
 */

namespace Jiaru\hasher;

/**
 * Class MD5Hasher
 *
 * @package \Jiaru\hasher
 */
class MD5Hasher
{
    /**
     * @param       $value
     * @param array $options
     *
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5',$value.$salt);
    }

    /**
     * @param       $value
     * @param       $hashValue
     * @param array $options
     *
     * @return bool
     */
    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $value.$salt) === $hashValue;
    }

}
