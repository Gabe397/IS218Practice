<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/9/2019
 * Time: 1:45 AM
 */

class htmlTags
{
    public static function tableStart($text)
    {
        return '<table class="table">'. $text ;
    }

    public static function tableEnd()
    {
        return '</table>';
    }

    public static function tableHead($text)
    {
        return '<thead>' .$text. '</thead>';
    }

    public static function tableRow($text)
    {
        return '<tr>' .$text. '</tr>';
    }

    public static function tHeaderColumn($text1,$text2,$text3)
    {
        //MAKE THIS DYNAMICALLY BE ABLE TO TAKE IN AS MUCH COLUMNS AS IT WANTS
        return '<th scope = "col">' .$text1. '</th>'     .'<th scope = "col">' .$text2. '</th>'.    '<th scope = "col">' .$text3. '</th>';
    }

    public static function tHeaderRow($text)
    {
        //MAKE THIS DYNAMICALLY BE ABLE TO TAKE IN AS MUCH ROWS AS IT WANTS
        return '<th scope = "row">' .$text. '</th>';
    }


}