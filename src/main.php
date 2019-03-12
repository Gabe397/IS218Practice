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

        $arrayObjects = File::readCSVIntoArray("../data/data.csv");

        $keys = ArrayFunctions::arrayKeys((array)$arrayObjects[0]);

        $keyCount = ArrayFunctions::arrayCount($keys);

        $numOfObjects = ArrayFunctions::arrayCount($arrayObjects);

        htmlTags::printBeginOfTable();

        for ($x = 0; $x < $keyCount; $x++) {
         $this ->html .= htmlTags::tHeaderColumn($keys[$x]);
        }

        htmlTags::printRowEndBodyStartForTable();


        for ($y = 0; $y < $numOfObjects; $y++) {
            $this ->html .= htmlTags::tableRowStart();
            for ($z = 0; $z < $keyCount ; $z++) {
                $hold = $keys[$z];
                $this->html .= htmlTags::rowEntry(($arrayObjects[$y]->$hold));
            }

            $this -> html.= htmlTags::tableRowEnd();
       }

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        print($this -> html);
    }
}