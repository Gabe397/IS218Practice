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

    public function __construct($keys, $masterArray)
    {

        $arrayObjects = $masterArray;


        //$keys = arrayFunctions::arrayKeys((array)$arrayObjects[0]);

        $keyCount = arrayFunctions::arrayCount($keys);

        $numOfObjects = arrayFunctions::arrayCount($arrayObjects);

        htmlTags::printBeginOfTable();

        $this ->html .= htmlTags::tHeaderColumn('id');

        for ($x = 0; $x < $keyCount; $x++) {
            $this ->html .= htmlTags::tHeaderColumn($keys[$x]);
        }

        htmlTags::printRowEndBodyStartForTable();

        for ($y = 0; $y < $numOfObjects; $y++) {
            $this ->html .= htmlTags::tableRowStart();
            for ($z = 0; $z < $keyCount+1 ; $z++) {
                $this->html .= htmlTags::rowEntry($masterArray[$y][$z]);;
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