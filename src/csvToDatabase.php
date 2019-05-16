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
        $table = sqliteFunctions::generateRandomTableName(10);

        $arrayObjects = csv::getRecords($uploadPath);

        $numOfObjects = arrayFunctions::arrayCount($arrayObjects);

        $keys = arrayFunctions::arrayKeys((array)$arrayObjects[0]);

        $columnStatement = sqliteFunctions::createColumnsString($keys);

        $headerInsert = sqliteFunctions::createInsertHeadersString($keys);

        $valuesInsert = sqliteFunctions::createInsertValues($keys);


        try {
            $pdo = (new SQLiteConnection())->connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Error Handling
            $stmt = "CREATE table $table(ID INTEGER PRIMARY KEY AUTOINCREMENT, $columnStatement);";
            $pdo->exec($stmt);

            $stmt = "INSERT INTO $table ($headerInsert) VALUES ($valuesInsert)";
            $stmt = $pdo->prepare($stmt);
            for($x = 0 ; $x<$numOfObjects; $x++)
            {
                $data = (array) $arrayObjects[$x];
                $stmt->execute($data);
            }

            //Selecting Data Needs word must be different function maybe? Also must be dynamic
            $stmt = $pdo->prepare("SELECT * FROM $table");
            $stmt->execute();



            $masterArray = [];

            /*while(True){
                $user = $stmt->fetch();
                if(count($user)==0){
                    break;
                }
                $value = $user;
                array_push($masterArray, $value);
            }*/



            $masterArray2 = $masterArray + array(null);
            print_r(count($masterArray2));




        } catch (PDOException $e) {
            echo $e->getMessage();//Remove or change message in production code
        }




    }






}


