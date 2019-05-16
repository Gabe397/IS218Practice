<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/10/2019
 * Time: 12:42 PM
 */
class record
{
    public function __construct(Array $fieldNames = null, $values = null)
    {
        $record = arrayFunctions::combineArray($fieldNames,$values);
        foreach ($record as $property => $value)
        {
            $this -> createProperty($property,$value);
        }
    }
    public function returnArray()
    {
        $array = (array) $this ;
        return $array;
    }
    public function createProperty($column,$rowEntry)
    {
        $this -> {$column} = $rowEntry;
    }


}
