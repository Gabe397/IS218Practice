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

    public function __construct()
    {
        $arrayObjects = csv::getRecords("../data/data.csv");//change so we put the file that the person uploads

            //Creates the header must modify using $arrayObjects
        $table = "TUTORIAL"; //change name maybe autoincrement
        try {
            $pdo = (new SQLiteConnection())->connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Error Handling
            $sql = "CREATE table $table(
            ID INTEGER PRIMARY KEY AUTOINCREMENT,
            first_name TEXT NOT NULL,
            last_name TEXT NOT NULL);";//Modify With Variables for Column
            $pdo->exec($sql);


            //Insertion Must modify for dynamic variables from $arrayObjects and multiple row insertion
            $data = [
                'name' => "try",
                'surname' => "hello",
            ];
            $sql = "INSERT INTO TUTORIAL (first_name, last_name) VALUES (:name, :surname)";
            $sql = $pdo->prepare($sql);
            $sql->execute($data);



            print("Created $table Table.\n");

        } catch (PDOException $e) {
            echo $e->getMessage();//Remove or change message in production code
        }


    }
}

new csvToDatabase();