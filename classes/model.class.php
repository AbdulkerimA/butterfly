<?php

class Model extends Db{
    // to get a spesfic user from db
    protected function getUser($uname){
        $sqlstmt = "select * from Account where user_name = '$uname';";
        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error".$this->conn()->error;
        }

    }


    // get a specific products
    public function getProduct($pName){
        $sqlstmt = "select * from products where p_name = '$pName';";
        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error".$this->conn()->error;
        }

    }  

    // user registration 

    protected function setUser($Rname,$Rpass,$Remail,$Rtel){
        $sqlstmt = "insert into customers(user_name,password,email,tel) 
        values('$Rname','$Rpass','$Remail','$Rtel')";

        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error";
        }
    }
}