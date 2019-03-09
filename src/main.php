<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/9/2019
 * Time: 3:15 AM
 */
include('htmlTags.php');

class main
{
    private $html;

    public function __construct()
    {
        //Write a function for the columns, function that is a for loop that will run until there is no more keys in the array
        //The problem with this is that if we have more than 3 columns in the csv it will fail. So we need to make VVVV this part calling the array keys dynamic.

        //$this->html .= htmlTags::tableStart( htmlTags::tableHead(htmlTags::tableRow(htmlTags::tHeaderColumn("Hello","yellow","bellow"))));

        $myArray = array(1,2,3,4,5);

        $this ->html .= htmlTags::tableStart();
        $this ->html .= htmlTags::tableHeadStart();
        $this ->html .= htmlTags::tableRowStart();

        for ($x = 0; $x < count($myArray); $x++) {
            $this ->html .= htmlTags::tHeaderColumn($myArray[$x]);
        }

        $this ->html .= htmlTags::tableRowEnd();
        $this ->html .= htmlTags::tableHeadEnd();

        $this ->html .= htmlTags::tableBodyStart();

        for ($y = 0; $y < count($myArray); $y++) {
            $this ->html .= htmlTags::tableRowStart();
            for ($z = 0; $z < count($myArray) ; $z++) {
                $this->html .= htmlTags::rowEntry($myArray[$z]);
            }


            $this -> html.= htmlTags::tableRowEnd();
        }

        $this ->html .= htmlTags::tableBodyEnd();
        $this ->html .= htmlTags::tableEnd();




    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        print($this -> html);
    }
}