<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/12/2019
 * Time: 11:38 PM
 */

class factory
{
    public static function build(Array $fieldNames = null, Array $values = null)
    {
        $record = new record($fieldNames,$values);

        return $record;
    }

}