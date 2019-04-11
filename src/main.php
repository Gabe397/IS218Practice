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

    public function __construct()
    {

        $arrayObjects = csv::getRecords("../data/data.csv");

        $keys = arrayFunctions::arrayKeys((array)$arrayObjects[0]);

        $keyCount = arrayFunctions::arrayCount($keys);

        $numOfObjects = arrayFunctions::arrayCount($arrayObjects);

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