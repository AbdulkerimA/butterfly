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

    public function register($Runame,$Rpass,$Rconf,$Remail,$Rtel){
        // before storing a phone num we have to check the length
        if (strlen($Rtel) < 10){
            $error = "phnone number must be atleast 10 digits";
            header("Location:./signup.php?error=$error");
        }
        elseif(strlen($Rtel) > 12){
            $error = "phone number must be lessthan 13 digits";
            header("Location:./signup.php?error=$error");   
        }
        elseif($Rpass != $Rconf){
            $error = "password doesn't match";
            header("Location:./signup.php?error=$error");   
        }
        else{
            if ($this->userNameAveleblityChecker($Runame)){
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
    }


    // add products in the cart 
    public function addProductinTheCart($pName,$amount,$userSession){

        // get a data 
        $products = $this->getProduct($pName);
        
        $data = array();
        while ($row = $products->fetch_assoc()){
            array_push($data,array("img" => $row['img_url'] ,"price" => $row['price'] ));
        }

        $img = $data[0]['img'];
        $price = $data[0]['price'];

        $queryStr = "insert into cart (p_name,img_url,price,p_amount,userSession) 
        values ('$pName','$img','$price','$amount','$userSession')";
           
            if($this->conn()->query($queryStr)){
                return "The product is added successfully";
            }
            else{
                return "the product is not added ";
            }
        
    }

    // remove product from cart 
    public function DeleteProductFromCart($uid,$pName){
        $result = $this->removeProductFromCart($uid,$pName);

        if ($result == "successfully removed"){
            return $result;
        }
        else {
            return "error ".$result;
        }
    }

    // change amount of a product in the cart table
    public function changeAmountOnCart($uid,$cartPName,$newAmount){
        $result = $this->productAmountUpdate($uid,$cartPName,$newAmount);
        if ($result == "query error"){
            return "error";
        }
        else {
            return $result;
        }
    }

    // insert into subtotal
    public function insertSubtotal($uid,$sub){
        $result = $this->setSubtotal($uid,$sub);
        return $result;
    }

    //update subtotal
    public function updateSubtotal($uid,$sub){
        $result = $this->subtotalUpdate($uid,$sub);
        return $result;
    }
    

    // remove p from cart 
    public function removeAllProductsFromCart($uid)
    {
        $result = $this->deleteAllFromCart($uid);
        return $result;
    }

    public function comment($uid,$cmnt){
        $result = $this->addComent($uid,$cmnt);
        return $result;
    }
    // ADMIN FUNCTIONS 
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

    // delete product from the db 
    public function DeleteProduct($pName){
        $result = $this->removeProduct($pName);

        if ($result == "successfully removed"){
            return $result;
        }
        else {
            return $result;
        }
    }

    // update price 
    public function changePrice($pName,$price){
        $result = $this->priceUpdate($pName,$price);
        if ($result == "query error"){
            return "error";
        }
        else {
            return $result;
        }
    }


}