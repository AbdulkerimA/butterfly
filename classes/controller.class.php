<?php
session_start();

class Controller extends Model{

    function userNameAveleblityChecker($userName){
        $result =$this->getUser($userName);
        if($result->num_rows != 0){
            $error = "user name is taken choose another one";
            header("Location:./signup.php?error=$error");
            exit;
        }
        else 
        return true;
    }

    public function register($Runame,$Rpass,$Remail,$Rtel){
        // before storing a phone num we have to check the length
        if (strlen($Rtel) < 10){
            $error = "phnone number must be atleast 10 digits";
            header("Location:./signup.php?error=$error");
        }
        elseif(strlen($Rtel) > 12){
            $error = "phone number must be lessthan 13 digits";
            header("Location:./signup.phpp?error=$error");   
        }
        else{
            $this->userNameAveleblityChecker($Runame);
            $queryResult = $this->setUser($Runame,$Rpass,$Remail,$Rtel);
            if ($queryResult == "success"){
                $_SESSION['user'] = $Runame;
                $_SESSION['islogedin'] = true;
                header("Location:./product.php");
                exit;
            }
            else{
                header("Loction:./signup.php?error=$queryResult");
            }
        }
    }

    // add product function 
    function checkProductName($pName){
        $result = $this->getProduct($pName);
        if ($result->num_rows != 0){
            return false;
        }
        else {
            return true;
        }
    }
    public function addProduct($img,$amount,$pName,$price,$pType,$pDisc){



        $queryStr = "insert into products (p_name,p_disc,img_url,price,type,p_amount) 
        values ('$pName','$pDisc','$img','$price','$pType','$amount')";

        if ($this->checkProductName($pName)){
           
            if($this->conn()->query($queryStr)){
                return "The product is added successfully";
            }
            else{
                return "the product is not added ";
            }

        }
        
        else{
            return "this product is avliable in the db";
        }
    }

}