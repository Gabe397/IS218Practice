<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 4/26/2019
 * Time: 1:20 PM
 */

class sqliteFunctions
{
    public static function createColumnsString($keys): string
    {
        $returnString = "";
        $keysCount = arrayFunctions::arrayCount($keys);

        for ($i=0; $i < $keysCount; $i++)
        {
            if($i<$keysCount-1)
            {
                $holder = $keys[$i];
                $returnString .= " $holder TEXT NOT NULL,";

            }

            else
            {
                $holder = $keys[$i];
                $returnString .= " $holder TEXT NOT NULL";
            }
        }

        return $returnString;

    }

    public static function createInsertString():string
    {

    }
}


