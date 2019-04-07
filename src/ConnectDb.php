<?php
/**
 * Created by PhpStorm.
 * User: mark7
 * Date: 4/5/2019
 * Time: 4:15 PM
 */

// Singleton to connect db.
class ConnectDb {
    // Hold the class instance.
    private static $instance = null;
    private $conn;

    private $host = '127.0.0.1';
    private $user = 'user-name';
    private $pass = 'password';
    private $name = 'db name';

    // The db connection is established in the private constructor.
    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,'password',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new ConnectDb();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);