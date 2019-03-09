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
        $this->html .= htmlTags::tableStart( htmlTags::tableHead(htmlTags::tableRow(htmlTags::tHeaderColumn("Hello","yellow","fellow"))));

        $this ->html .= htmlTags::tableEnd();

    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        print($this -> html);
    }
}