<?php
/**
 * Created by PhpStorm.
 * User: Vishal
 * Date: 3/11/2019
 * Time: 11:39 AM
 */

class loops
{
    public static function forLoop($xVal, $countNum, $data): string{
        for ($x = $xVal; $x<$countNum; $x++){
            print($data);
        }
    }

    public static function xValReturn($x): float {
        return $x;
    }

    public static function countNumReturn($countNum): float{
        return $countNum;
    }

    public static function dataReturn($data){
        return $data;
    }


}