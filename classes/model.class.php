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

    // user registration 

    protected function setUser($Rname,$Rpass,$Remail,$Rtel){
        $sqlstmt = "insert into customers_information (userName,email,password,tel) 
        values('$Rname','$Remail','$Rpass','$Rtel')";

        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error";
        }
    }
}