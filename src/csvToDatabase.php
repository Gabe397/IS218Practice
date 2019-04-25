<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 4/24/2019
 * Time: 9:53 PM
 */
require __DIR__ . '/../vendor/autoload.php';

class csvToDatabase
{

    public function __construct(){
        $arrayObjects = csv::getRecords("../data/data.csv");//change so we put the file that the person uploads

        $table = "tcompany"; //change name maybe autoincrement
        try {
            $db = (new SQLiteConnection())->connect();
            $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
            $sql ="CREATE table $table(
            Prename VARCHAR( 50 ) NOT NULL, 
            Name VARCHAR( 250 ) NOT NULL,
            StreetA VARCHAR( 150 ) NOT NULL, 
            StreetB VARCHAR( 150 ) NOT NULL, 
            StreetC VARCHAR( 150 ) NOT NULL, 
            County VARCHAR( 100 ) NOT NULL,
            Postcode VARCHAR( 50 ) NOT NULL,
            Country VARCHAR( 50 ) NOT NULL);" ;//Modify With Variables for Column
            $db->exec($sql);




            print("Created $table Table.\n");

        }
        catch(PDOException $e) {
            echo $e->getMessage();//Remove or change message in production code
        }










    }
}

new csvToDatabase();