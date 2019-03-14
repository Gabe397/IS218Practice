<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/12/2019
 * Time: 12:53 AM
 */

class csvFunctions
{
    public static function openFile($fileName)
    {
        return fopen($fileName,"r");
    }

    public static function getCSVRow($handle)
    {
        return fgetcsv($handle,1000,",");
    }

    public static function closeCSV($handle)
    {
        return fclose($handle);
    }

    public static function getHandle($fileName)
    {
        $handle = csvFunctions::openFile($fileName);

        return $handle;
    }


}