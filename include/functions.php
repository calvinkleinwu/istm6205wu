<?php
//create database class
class Database
{
    private static $dbName = 'jobboard' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'YytJ9DLSy2nl';
     
    private static $conn  = null;
    //prevent initialization 
    public function __construct() {
        die('Init function is not allowed');
    }
    //define database connection method by using PDO way  
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$conn )
       {     
        try
        {
          self::$conn =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$conn;
    }
     
    public static function disconnect()
    {
        self::$conn = null;
    }
}
?>
