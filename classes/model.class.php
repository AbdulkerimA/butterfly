<?php

class Model extends Db{
    // get all usrs 
    public function getAllUsers(){
        $sqlstmt =  "select * from customers";
        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error".$this->conn()->error;
        }
    }
    
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


    // get all product that are in the cart table
    public function getProductsOnCart($userSession){
        $sqlstmt = "select * from Cart where userSession = '$userSession';";
        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error".$this->conn()->error;
        }

    }

    // remove product from cart 
    public function removeProductFromCart($uid,$pName){
        $sqlstmt = "delete from cart where p_name = '$pName' and userSession='$uid'";

        if ($result = $this->conn()->query($sqlstmt)){
            return "successfully removed";
        } 
        else {
            return "query problem";
        }
    }

    // update amount of a product in cart 
    public function productAmountUpdate($uid,$pName,$newAmount){
        $sqlstmt = "UPDATE cart SET p_amount = '$newAmount' WHERE p_name = '$pName' and userSession='$uid'";

        if($result = $this->conn()->query($sqlstmt)){
            return $newAmount;
        }
        else{
            return "query error";
        }
    }
    
    // add subtotal 
    public function setSubtotal($uid,$sub){
        $sqlstmt = "insert into subtotal values('$sub','$uid')";

        if ($result = $this->conn()->query($sqlstmt)){
            return "successfuly inserted";
        }
        else{
            return "query error";
        }
    }
    
    // get users subtotal 
    public function getSubtotal($userSession){
        $sqlstmt = "select * from subtotal where uid = '$userSession';";
        if ($result = $this->conn()->query($sqlstmt)){
            return $result;
        }
        else {
            return "query error".$this->conn()->error;
        }

    }

    //update sub total
    public function subtotalUpdate($uid,$sub){
        $sqlstmt = "UPDATE subtotal SET subtotal = '$sub' WHERE uid='$uid'";

        if($result = $this->conn()->query($sqlstmt)){
            return $sub;
        }
        else{
            return "query error";
        }
    }

    //Admin 
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