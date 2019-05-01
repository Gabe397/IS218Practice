<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: Vishal
 * Date: 5/1/2019
 * Time: 6:38 PM
 */

class proj2Tests extends TestCase
{
    public function testStringLowerExists(){
        $this -> assertTrue(
            method_exists(stringFunctions::class, "stringLower")
        );
    }
    public function testExplodeStringExists(){
        $this -> assertTrue(
            method_exists(stringFunctions::class, "explodeString")
        );
    }
}