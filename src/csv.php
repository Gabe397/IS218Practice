<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/12/2019
 * Time: 11:02 PM
 */

class csv
{
    static public function getRecords($fileName){
        $file = csvFunctions::openFile($fileName);

        $fieldNames = ArrayFunctions::instantiateArray();

        $count = 0;

        while(! feof($file))
        {
            $record = csvFunctions::getCSVRow($file);
            if($count == 0)
            {
                $fieldNames = $record;
            }

            else{
                $recordArray[] =  recFactory::Build($fieldNames, $record);
            }

            $count++;

        }

        csvFunctions::closeCSV($file);
        return $recordArray;

    }

}