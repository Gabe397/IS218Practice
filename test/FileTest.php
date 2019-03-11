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
       // $this-> assertInstanceOf(File::class,$file);
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

    public function testMainConstruct(): void{
        $this -> assertTrue(
          method_exists(main::class,'__construct')
         );

    }

    public function testTableStart(): void{
        $this -> assertTrue(
            htmlTags::tableStart() == '<table class="table">'
        );
    }
    public function testTableEnd(): void{
        $this -> assertTrue(
            htmlTags::tableEnd() == '</table>'
        );
    }
    public function testTableHeadStart(): void{
        $this -> assertTrue(
            htmlTags::tableHeadStart() == '<thead>'
        );
    }
    public function testTableHeadEnd(): void{
        $this -> assertTrue(
            htmlTags::tableHeadEnd() == '</thead>'
        );
    }
    public function testTableRowStart(): void{
        $this -> assertTrue(
            htmlTags::tableRowStart() == '<tr>'
        );
    }
    public function testTableRowEnd(): void{
        $this -> assertTrue(
            htmlTags::tableRowEnd() == '</tr>'
        );
    }
    public function testRowEntry(): void{
        $var = "Test";
        $this -> assertTrue(
            htmlTags::rowEntry($var) == '<td>' .$var. '</td>'
        );
    }



    public function testTableStart(): void{
        $this -> assertTrue(
            htmlTags::tableStart() == '<table class="table">'
        );
    }

    public function testTableEnd(): void{
        $this -> assertTrue(
            htmlTags::tableEnd() == '</table>'
        );
    }

    public function testTableHeadStart(): void{
        $this -> assertTrue(
            htmlTags::tableHeadStart() == '<thead>'
        );
    }

    public function testTableHeadEnd(): void{
        $this -> assertTrue(
            htmlTags::tableHeadEnd() == '</thead>'
        );
    }

    public function testTableRowStart(): void{
        $this -> assertTrue(
            htmlTags::tableRowStart() == '<tr>'
        );
    }

    public function testTableRowEnd(): void{
        $this -> assertTrue(
            htmlTags::tableRowEnd() == '</tr>'
        );
    }

    public function testRowEntry(): void{
        $var = "Test";
        $this -> assertTrue(
            htmlTags::rowEntry($var) == '<td>' .$var. '</td>'
        );
    }

}
