<?php

/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 2/26/2019
 * Time: 6:45 PM
 */

class File
{
    public static function readCSVIntoArray(string $fileName):array
    {
        $recordsArray = ArrayFunctions::instantiateArray();
        $count = 0;
        $fieldName = '';


        if($handle = csvFunctions::openFile($fileName))
        {
            while($row = csvFunctions::getCSV($handle))
            {
                if($count == 0)
                {
                    $fieldName = $row;
                }

                else{
                    $recordsArray[] =(object)recFactory::Build($fieldName,$row);

                }
                $count++;

            }
            csvFunctions::closeCSV($handle);
        }
        return $recordsArray;
    }






}