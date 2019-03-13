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

        $count = 0;

        $recordArray = arrayFunctions::instantiateArray();

        if($handle = csvFunctions::openFile($fileName))
        {
            while($row = csvFunctions::getCSVRow($handle))
            {
                $record = csvFunctions::getCSVRow($file);
                if($count == 0)
                {
                    $fieldNames = $record;
                }

            else{
                $recordArray[] = factory::Build($fieldNames, $record);
                }

            $count++;

            }
            csvFunctions::closeCSV($handle);
        }
        return $recordArray;
    }

}