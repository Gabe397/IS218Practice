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
    public function testStringFunctionsExists(){
        $this -> assertTrue(
         class_exists("stringFunctions")
         );
    }
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


    public function testConfigExists(){
        $this -> assertTrue(
            class_exists("config")
        );
    }

    public function testSQLiteConnectionExists(){
        $this -> assertTrue(
          class_exists("SQLiteConnection")
        );
    }
    public function testConnectExists(){
        $this -> assertTrue(
          method_exists(SQLiteConnection::class, "connect")
        );
    }

    public function testSqliteFunctionsExists(){
        $this -> assertTrue(
          class_exists("sqliteFunctions")
        );
    }
    public function testCreateColumnsStringExists(){
        $this -> assertTrue(
            method_exists(sqliteFunctions::class, "createColumnsString")
        );
    }
    public function testCreateInsertHeadersStringExists(){
        $this -> assertTrue(
            method_exists(sqliteFunctions::class, "createInsertHeadersString")
        );
    }
    public function testCreateInsertValuesExists(){
        $this -> assertTrue(
            method_exists(sqliteFunctions::class, "createInsertValues")
        );
    }
    public function testGenerateRandomTableNameExists(){
        $this -> assertTrue(
            method_exists(sqliteFunctions::class, "generateRandomTableName")
        );
    }

    public function testDirectoryFunctionsExists(){
        $this ->asserttrue(
            class_exists("directoryFunctions")
        );
    }
    public function testGetCurrentDirectoryExists(){
        $this -> assertTrue(
          method_exists(directoryFunctions::class, "getCurrentDirectory")
        );
    }
    public function testUploadsDirectoryExists(){
        $this -> assertTrue(
            method_exists(directoryFunctions::class, "uploadsDirectory")
        );
    }
    
}