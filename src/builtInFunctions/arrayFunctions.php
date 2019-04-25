<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/10/2019
 * Time: 3:28 AM
 */

class arrayFunctions
{
    public static function combineArray(array $key,array $val)
    {
        return array_combine($key, $val);
    }

    public static function instantiateArray()
    {
        return  Array();
    }

    public static function arrayKeys(array $list)
    {
        return array_keys((array) $list);
    }

    public static function arrayCount(array $list)
    {
        return count($list);
    }

    public static function pointToEnd(array $list)
    {
        return end($list);
    }

}