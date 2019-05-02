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
    public function __construct($uploadPath)
    {
        require __DIR__ . '/../vendor/autoload.php';
        //change so we put the file that the person uploads
        $arrayObjects = csv::getRecords($uploadPath);
        //Creates the header must modify using $arrayObjects
        $table = "TUTORIAL15"; //change name maybe autoincrement
        try {
            $pdo = (new SQLiteConnection())->connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Error Handling
            $stmt = "CREATE table $table(
            ID INTEGER PRIMARY KEY AUTOINCREMENT,
            first_name TEXT NOT NULL,
            last_name TEXT NOT NULL);";//Modify With Variables for Column
            $pdo->exec($stmt);
            //Insertion Must modify for dynamic variables from $arrayObjects and multiple row insertion
            $data = [
                'name' => "try",
                'surname' => "hello",
            ];
            $stmt = "INSERT INTO $table (first_name, last_name) VALUES (:name, :surname)";
            $stmt = $pdo->prepare($stmt);
            $stmt->execute($data);
            //Selecting Data Needs word must be different function maybe? Also must be dynamic
            //$stmt = $pdo->prepare("SELECT first_name, last_name FROM $table");
            //$stmt->execute();
            //$user = $stmt->fetch();
            //var_dump($user);

            csvToDatabase::pull($pdo, $table);
            print("<br> <br> Created $table Table.\n");
        } catch (PDOException $e) {
            echo $e->getMessage();//Remove or change message in production code
        }
    }

    public function pull($pdo, $table){
        $query[] = $pdo->query("SELECT * FROM $table")->fetchall();
        print_r($query);//set this to return or whatever syntax is needed.
    }
}