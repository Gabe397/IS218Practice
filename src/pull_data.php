<?php
class pull_data{
    public static function pull($pdo, $table){
        $query[] = $pdo->query("SELECT * FROM $table")->fetchall();
        print_r($query);//set this to return or whatever syntax is needed.
    }
}