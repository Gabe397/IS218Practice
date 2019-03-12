<?php
include "loops.php";
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 3/9/2019
 * Time: 3:15 AM
 */


class main
{
    private $html;

    public function __construct()
    {

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
    }
    public function __destruct()
    {
        print($this -> html);
    }
}
