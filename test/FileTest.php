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

    public function testCombineArray():void {
        $array1 = array(1,2,3);
        $array2 = array(4,5, 6);
        $combinedArray = ArrayFunctions::combineArray($array1,$array2);

        $this -> assertTrue(
            $combinedArray[1] == 4 && $combinedArray[2] == 5 && $combinedArray[3] == 6, "Arrays are Combined"
        );
    }

    public function testArrayInstantiate() :void
    {
        $testArray = ArrayFunctions::instantiateArray();
        $this -> assertIsArray(
            $testArray
        );
    }

    public function testArrayKeys() :void{
        $testArray = array("key1" => 1, "key2" => 2);
        $keys = ArrayFunctions::arrayKeys($testArray);


        self::assertTrue(
            $keys[0] == "key1"
        );
    }

    public function testCount():void{
        $testArray = array(1,2,3);

        $this->assertEquals(3,ArrayFunctions::arrayCount($testArray));
    }

    public function testCSVOpenExists():void
    {
        $this->assertTrue(
            method_exists(csvFunctions::class,'openFile')
        );
    }

    public function testCSVRow():void
    {
        $this->assertTrue(
            method_exists(csvFunctions::class,'getCSVRow')
        );
    }

    public function testCSVClose():void
    {
        $this->assertTrue(
            method_exists(csvFunctions::class,'closeCSV')
        );
    }




    public function testPrintBeginOfTableExists():void{
        $this->assertTrue(
            method_exists(htmlTags::class, 'printBeginOfTable')
        );
    }

    public function testPrintRowEndBodyStartForTableExists(): void{
        $this->assertTrue(
            method_exists(htmlTags::class, 'printRowEndBodyStartForTable')
        );
    }

    public function testPrintTableBodyEndAndWholeTableEndExists(): void{
        $this->assertTrue(
            method_exists(htmlTags::class, 'printTableBodyEndAndWholeTableEnd')
        );
    }

    public function testTableBodyEndExists(): void{
        $this->assertTrue(
            method_exists(htmlTags::class, 'tableBodyEnd')
        );
    }

    public function testTableBodyEnd(): void{
        $this->assertTrue(
            htmlTags::tableBodyEnd() == '</tbody>'
        );
    }

    public function testTableStartExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableStart')
        );
    }

    public function testTableEndExists(): void{
        method_exists(htmlTags::class, 'tableEnd');
    }

    public function testTableHeadStartExists(): void{
        method_exists(htmlTags::class, 'tableHeadStart');
    }
















}
