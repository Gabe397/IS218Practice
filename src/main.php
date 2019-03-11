<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/9/2019
 * Time: 3:15 AM
 */


class main
{
    private $html;
    public function insert($text){
        return ($this -> html .= $text );
    }

    public function __construct()
    {
        //Write a function for the columns, function that is a for loop that will run until there is no more keys in the array
        //The problem with this is that if we have more than 3 columns in the csv it will fail. So we need to make VVVV this part calling the array keys dynamic.

        //$this->html .= htmlTags::tableStart( htmlTags::tableHead(htmlTags::tableRow(htmlTags::tHeaderColumn("Hello","yellow","bellow"))));

        $var = File::readCSVIntoArray("../data/data.csv");
        $keys = array_keys((array)$var[0]);


        htmlTags::printBeginOfTable();


        for ($x = 0; $x < count($keys); $x++) {
            $this ->html .= htmlTags::tHeaderColumn($keys[$x]);
        }

        htmlTags::printRowEndBodyStartForTable();

        for ($y = 0; $y < count($var); $y++) {
            $this ->html .= htmlTags::tableRowStart();
            for ($z = 0; $z < count($keys) ; $z++) {
                $hold = $keys[$z];
                $this->html .= htmlTags::rowEntry(($var[$y]->$hold));
            }

            $this -> html.= htmlTags::tableRowEnd();
       }

        htmlTags::printTableBodyEndAndWholeTableEnd();

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        print($this -> html);
    }
}