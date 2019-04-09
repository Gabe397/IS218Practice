<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 4/8/2019
 * Time: 7:27 PM
 */

class directoryFunctions
{
    public static function  getCurrentDirectory()
    {
        return getcwd();
    }

    public static function uploadsDirectory()
    {
        return "/uploads/";
    }


}