<?php


class View extends Model {

    public function login($luname,$lpass){
        $dbResult = $this->getUser($luname);

        while($row = $dbResult->fetch_assoc()){
            if ($luname == $row['user_name'] && $lpass == $row['password']){
                session_start();
                $_SESSION['user'] = $luname;
                $_SESSION['islogedin'] = true;
                $_SESSION['user_type'] = $row['user_type'];
                $user_type = $row['user_type'];

                if($user_type == "admin")
                {
                    header("Location:./admin");
                }
                else
                {
                    header("Location:./product.php");
                }
                exit;
            }   
        }
        $error = "username or password is incorrect";
        header("Location:./login.php?error=$error");
    }


    // display products for users 
    public function displayProductForUsers(){
        
        $result = $this->getAllProduct();
        $products = array();

        while ($row = $result->fetch_assoc()){
            array_push($products,
                array(
                    "pName"=>$row['p_name'],"pdisc"=>$row['p_disc'],
                    "imgUrl"=>$row['img_url'],"price"=>$row['price'],
                    "type"=>$row['type']
                )
            );
        }
        return $products;
    } 

    // display products in the cart 
    public function displayProductsOnTheCart($userSession){
        
        $result = $this->getProductsOnCart($userSession);
        $products = array();

        while ($row = $result->fetch_assoc()){
            array_push($products,
                array(
                    "pName"=>$row['p_name'],"imgUrl"=>$row['img_url'],
                    "amount"=>$row['p_amount'],"p"=>$row['price']
                )
            );
        }
        return $products;
    } 

    // display all users subtotal
    public function displaySubtotal($userSession){
        
        $result = $this->getSubtotal($userSession);
        $products = array();

        while ($row = $result->fetch_assoc()){
            array_push($products,array("sub"=>$row['subtotal'],"user"=>$row['uid']));
        }
        return $products;
    } 

    // display all users for admin page 
    public function displayAllUsers(){
        $result = $this-> getAllUsers();
        $data = array();

        while ($row = $result->fetch_assoc()){

            array_push(
                $data,
                array(
                    "id"=>$row['id'],
                    "name"=>$row['user_name'],
                    "email"=>$row['email'],
                    "tel"=>$row['tel'],
                    "comment"=>$row['comment'],
                )
            );
        }

        return $data;
    }


    // display products in admin page
    public function displayProductForAdmin(){
        
        $result = $this->getAllProduct();
        $products = array();

        while ($row = $result->fetch_assoc()){
            array_push($products,
                array(
                    "pName"=>$row['p_name'],"pdisc"=>$row['p_disc'],
                    "imgUrl"=>$row['img_url'],"price"=>$row['price'],
                    "type"=>$row['type'],"pAmount"=>$row['p_amount']
                )
            );
        }
        return $products;
    } 


}