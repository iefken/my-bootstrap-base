<?php
/**
 * Created by PhpStorm.
 * User: ief.falot
 * Date: 3/04/2018
 * Time: 9:34
 */

class Database{

    protected $url;
    protected $username;
    protected $password;
    protected $database;
    protected $connection=null;

    public function __construct($url,$username,$password,$database)
    {
        $this->url=$url;
        $this->username=$username;
        $this->password=$password;
        $this->database=$database;
    }

    //make a connection
    protected function makeConnection(){

        $this->connection = new mysqli($this->url,$this->username,$this->password,$this->database);
        if($this->connection->connect_error){
            echo "Fail: ".$this->connection->connect_error;
        }/*else{

            echo "Connection succes!";
            var_dump($this->connection);

        }*/
    }

    //close the connection
    protected function closeConnection(){
        if($this->connection!=null){
            $this->connection->close();
            $this->connection = null;
        }
    }

    protected function preventSqlInjection($query){
        $result = $this->connection->real_escape_string($query);
        return $result;
    }

    protected function executeQuery($query){
        //check for db connection?
        $this->makeConnection();
        //check for SQL injection

        // execute query
        $results = $this->connection->query($query);
        return $results;

    }

}