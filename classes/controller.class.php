<?php
session_start();

class Controller extends Model{

    function userNameAveleblityChecker($userName){
        $result =$this->getUser($userName);
        if($result->num_rows != 0){
            $error = "user name is taken choose another one";
            header("Location:../signup/signup.php?error=$error");
            exit;
        }
        else 
        return true;
    }

    public function register($Runame,$Rpass,$Remail,$Rtel){
        // before storing a phone num we have to check the length
        if (strlen($Rtel) < 10){
            $error = "phnone number must be atleast 10 digits";
            header("Location:../signup/signup.php?error=$error");
        }
        elseif(strlen($Rtel) > 12){
            $error = "phone number must be lessthan 13 digits";
            header("Location:../signup/signup.php?error=$error");   
        }
        else{
            $this->userNameAveleblityChecker($Runame);
            $queryResult = $this->setUser($Runame,$Rpass,$Remail,$Rtel);
            if ($queryResult == "success"){
                $_SESSION['user'] = $Runame;
                $_SESSION['islogedin'] = true;
                header("Location:../products/product.php");
                exit;
            }
            else{
                header("Loction:../signup/signup.php?error=$queryResult");
            }
        }
    }


}