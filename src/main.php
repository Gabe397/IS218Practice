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

        $this->html .= htmlTags::tableStart( htmlTags::tableHead(htmlTags::tableRow(htmlTags::tHeaderColumn("Hello","yellow","bellow"))));

        //A for Loo


        $this ->html .= htmlTags::tableEnd();

    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        print($this -> html);
    }
}