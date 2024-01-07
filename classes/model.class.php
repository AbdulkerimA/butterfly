<?php

class Model extends Db{
    // to get a spesfic user from db
    protected function getUser($uname){
        $sqlstmt = "select * from customers_information where userName = '$uname';";
        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error".$this->conn()->error;
        }

    }
}