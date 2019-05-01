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
    public function testStringBaseNameExists(){
        $this -> assertTrue(
            method_exists(stringFunctions::class, "stringBasename")
        );
    }

    public function testStringLower(){
        $test = new stringFunctions();
        $this -> assertTrue(
        $test::stringLower("HELLO") == "hello"
        );
    }
    public function testExplodeString(){
        $test = new stringFunctions();
        $this -> assertTrue(
            $test::explodeString("this", "this is it. This is now") == explode("this", "this is it. This is now")
        );
    }

}