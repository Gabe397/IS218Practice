<?php
/**
 * Created by PhpStorm.
 * User: Vishal
 * Date: 5/1/2019
 * Time: 6:38 PM
 */

class proj2Tests
{
    public function testStringLowerExists(){
        $this -> assertTrue(
            method_exists(stringFunctions::class, "stringLower")
        );
    }
}