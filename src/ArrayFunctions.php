<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/10/2019
 * Time: 3:28 AM
 */

class ArrayFunctions
{
    public static function combineArray(array $key,array $val)
    {
        return array_combine($key, $val);
    }
}