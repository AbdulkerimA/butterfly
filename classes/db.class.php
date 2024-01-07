<?php

class Db {
    private $host = "localhost";
    private $user = "root";
    //private $pass="";
    private $dbName = "butterflydb";

    protected function conn(){
        $connection = new mysqli($this->host,$this->user,"",$this->dbName);
        if ($connection->errno){
            return "connection error";
        }
        else{
          return $connection;
        }
    }
}