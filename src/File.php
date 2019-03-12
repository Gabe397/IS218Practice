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

        if(($handle = fopen("$fileName",'r')) !== FALSE)
        {
            while(($row = fgetcsv($handle,1000,",")) != FALSE)
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
            fclose($handle);
        }
        return $recordsArray;
    }






}