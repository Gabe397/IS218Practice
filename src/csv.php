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

        $fieldNames = arrayFunctions::instantiateArray();

        $handle = csvFunctions::getHandle($fileName);

        $count = 0;

        $recordArray = arrayFunctions::instantiateArray();

        if($handle)
        {
            while($row = csvFunctions::getCSVRow($handle))
            {
                $record = csvFunctions::getCSVRow($file);
                if($count == 0)
                {
                    $fieldNames = $record;
                }

            else{
                $recordArray[] = factory::build($fieldNames, $record);
                }

            $count++;

            }
            csvFunctions::closeCSV($handle);
        }
        return $recordArray;
    }
}