<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/9/2019
 * Time: 1:45 AM
 */

class htmlTags
{
    public static function table($text)
    {
        return '<table class="table">'. $text . '</table>';
    }

    public static function tableHead($text)
    {
        return '<thead>' .$text. '</thead>';
    }

    public static function tableRow($text)
    {
        return '<tr>' .$text. '</tr>';
    }

    public static function tHeaderColumn($text)
    {
        return '<th scope = "col">' .$text. '</th>';
    }

    public static function tHeaderRow($text)
    {
        return '<th scope = "row">' .$text. '</th>';
    }


}