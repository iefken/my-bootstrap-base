<?php
/**
 * Created by PhpStorm.
 * User: ief.falot
 * Date: 3/04/2018
 * Time: 10:34
 */
include_once "Database.php";

class DatabaseFactory
{
    //singleton
    private static $connection;

    public static function getDatabase(){
        if(self::$connection == null){

            $url = "localhost";
            $username = "mysqluser";
            $password = "mysqlpassword";
            $db = "mytestdb";
            
            /*include_once "initialize.php";*/
            self::$connection=new Database($url,$username,$password,$db);
        }
        return self::$connection;

    }


}