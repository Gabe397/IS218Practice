<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/10/2019
 * Time: 1:42 AM
 */


abstract class recFactory
{
    public static function Build($fieldName, $row)
    {
        return arrayFunctions::combineArray($fieldName, $row);
    }
}