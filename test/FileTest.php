<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 2/26/2019
 * Time: 6:46 PM
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    public function testFileInstantiate(): void
    {
        $file = new File();
        $this-> assertInstanceOf(File::class,$file);
    }

    public function testCSVExists() :void
    {
        $this -> assertFileExists('data\data.csv');
    }

    public function testDirectoryExists():void
    {
        $this -> assertDirectoryExists('data');
    }

    public function testReadCSVIntoArray(): void
    {
        $this->assertTrue(
            method_exists(File::class,'readCSVIntoArray')
        );
    }


    public function testReadCSVIntoArrayReturnsArray(): void{
        $var = File::readCSVIntoArray("data/data.csv",'Car');
        $this-> assertTrue(
            gettype($var)==gettype(array())
        );

        print_r($var);
    }


}
