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


    // get all products 
    
    public function getAllProduct(){
        $sqlstmt = "select * from products ";
        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error".$this->conn()->error;
        }

    }

    // get a specific product

    public function getProduct($pName){
        $sqlstmt = "select * from products where p_name = '$pName';";
        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error".$this->conn()->error;
        }

    }  

    // delete product

    public function removeProduct($pName){
        $sqlstmt = "delete from products where p_name = '$pName'";

        if ($result = $this->conn()->query($sqlstmt)){
            return "successfully removed";
        } 
        else {
            return "query problem";
        }
    }

    // update price of product 
    public function priceUpdate($pName,$price){
        $sqlstmt = "UPDATE products SET price = '$price' WHERE p_name = '$pName' ";

        if($result = $this->conn()->query($sqlstmt)){
            return $price;
        }
        else{
            return "query error";
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