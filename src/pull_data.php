<?php
class pull_data{
    private $html;
    public function pull($pdo, $table){
        $query[] = $pdo->query("SELECT * FROM $table")->fetchall();
        print_r($query);//set this to return or whatever syntax is needed.

        $arrayObjects = $query;
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
}