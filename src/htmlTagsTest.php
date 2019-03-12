<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: Vishal
 * Date: 3/12/2019
 * Time: 3:43 PM
 */

class htmlTagsTest extends TestCase
{
    //These tests are for the htmlTags.php file and if they return the correct values
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

    public function testTableBodyEnd(): void{
        $this->assertTrue(
            htmlTags::tableBodyEnd() == '</tbody>'
        );
    }

    public function testTHeaderColumn(): void{
        $test = 'hello';
        $this -> assertTrue(
            htmlTags::tHeaderColumn($test) == '<th scope = "col">' .$test. '</th>'
        );
    }

    public function testTHeaderRow(): void{
        $test = 'hello';
        $this -> assertTrue(
            htmlTags::tHeaderRow($test) == '<th scope = "row">' .$test. '</th>'
        );
    }

    public function testTableBodyStart(): void{
        $this -> assertTrue(
            htmlTags::tableBodyStart() == '<tbody>'
        );
    }




    //These tests are for testing if the method exists
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

    public function testTableStartExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableStart')
        );
    }

    public function testTableEndExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableEnd')
        );

    }

    public function testTableHeadStartExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableHeadStart')
        );

    }

    public function testTableHeadEndExists():void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableHeadEnd')
        );

    }

    public function testTableRowStartExists():void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableRowStart')
        );

    }

    public function testTableRowEndExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableRowEnd')
        );

    }

    public function testTHeaderColumnExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tHeaderColumn')
        );

    }

    public function testTHeaderRowExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tHeaderRow')
        );

    }

    public function testRowEntryExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'rowEntry')
        );

    }

    public function testTableBodyStartExists(): void{
        $this -> assertTrue(
            method_exists(htmlTags::class, 'tableBodyStart')
        );

    }

}