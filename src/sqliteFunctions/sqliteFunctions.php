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
                $returnString .= "$holder TEXT,";

            }

            else
            {
                $holder = $keys[$i];
                $returnString .= "$holder TEXT";
            }
        }

        return $returnString;

    }

    public static function createInsertHeadersString($keys):string
    {
        $returnString = "";
        $keysCount = arrayFunctions::arrayCount($keys);
        for($i=0; $i<$keysCount; $i++)
        {
            if($i<$keysCount-1)
            {
                $returnString .= "$keys[$i],";
            }

            else
            {
                $returnString .= "$keys[$i]";;
            }

        }
        return $returnString;
    }

    public static function createInsertValues($keys):string
    {
        $returnString = "";
        $keysCount = arrayFunctions::arrayCount($keys);
        for($i=0; $i<$keysCount; $i++)
        {
            if($i<$keysCount-1)
            {
                $returnString .= ":$keys[$i],";
            }

            else
            {
                $returnString .= ":$keys[$i]";;
            }

        }
        return $returnString;
    }

    public static function generateRandomTableName($length=10):string {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }


}



