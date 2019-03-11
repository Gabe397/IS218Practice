<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/9/2019
 * Time: 1:45 AM
 */

class htmlTags
{
    public static function tableStart()
    {
        return '<table class="table">';
    }

    public static function tableEnd()
    {
        return '</table>';
    }

    public static function tableHeadStart()
    {
        return '<thead>';
    }

    public static function tableHeadEnd()
    {
        return '</thead>';
    }


    public static function tableRowStart()
    {
        return '<tr>';
    }

    public static function tableRowEnd()
    {
        return '</tr>';
    }

    public static function tHeaderColumn($text)
    {
        //MAKE THIS DYNAMICALLY BE ABLE TO TAKE IN AS MUCH COLUMNS AS IT WANTS
        return '<th scope = "col">' .$text. '</th>';
    }

    public static function tHeaderRow($text)
    {
        //MAKE THIS DYNAMICALLY BE ABLE TO TAKE IN AS MUCH ROWS AS IT WANTS
        return '<th scope = "row">' .$text. '</th>';
    }

    public static function rowEntry($text)
    {
        return '<td>' .$text. '</td>';
    }

    public static function tableBodyStart()
    {
        return '<tbody>';
    }

    public static function tableBodyEnd()
    {
        return '</tbody>';
    }

    public static function printBeginOfTable (): string {
        $var = htmlTags::tableStart() . htmlTags::tableHeadStart() . htmlTags::tableRowStart();
        return $var;
    }

    public static function printRowEndBodyStartForTable (): string{
        $var = htmlTags::tableRowEnd() . htmlTags::tableHeadEnd() . htmlTags::tableBodyStart();
        return $var;
    }

    public static function printTableBodyEndAndWholeTableEnd (): string{
        $var = htmlTags::tableBodyEnd() . htmlTags::tableEnd();
        return $var;
    }



}