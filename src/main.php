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
        //Write a function for the columns

        $this->html .= htmlTags::tableStart( htmlTags::tableHead(htmlTags::tableRow(htmlTags::tHeaderColumn("Hello","yellow","fellow"))));
        //A for Loop for the Rows maybe a function
        $this ->html .= htmlTags::tableEnd();

    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        print($this -> html);
    }
}