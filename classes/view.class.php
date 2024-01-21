<?php
session_start();

class View extends Model {

    public function login($luname,$lpass){
        $dbResult = $this->getUser($luname);

        while($row = $dbResult->fetch_assoc()){
            if ($luname == $row['user_name'] && $lpass == $row['password']){
                $_SESSION['user'] = $luname;
                $_SESSION['islogedin'] = true;

                header("Location:./product.php");
                exit;
            }   
        }
        $error = "username or password is incorrect";
        header("Location:./login.php?error=$error");
    }
}