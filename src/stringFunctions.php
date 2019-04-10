<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 4/9/2019
 * Time: 7:48 PM
 */

class stringFunctions
{
    public static function stringLower(string $word)
    {
        return strtolower($word);
    }

    public static function explodeString(string $boundStr,string $inputStr)
    {
        return explode($boundStr,$inputStr);
    }

    public static function stringBasename(string $path, string $suffix)
    {
        return basename($path,$suffix);
    }
}