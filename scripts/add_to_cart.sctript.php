<?php

// this page is only accessable by post request 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

include "../inc/includes.admin.inc.php";

if(isset($_POST['delete'])){
    $contobj1 = new Controller();

    $cartPName = trim($_POST['cartPName']);
    $uid = $_POST['uid'];
    
    $d_result = $contobj1->DeleteProductFromCart($uid,$cartPName);

    //echo $d_result;
    
    unset($_POST['delete']);
}
else{
    $contobj = new Controller();

    $pName = $_POST['pName'];
    $amount = $_POST['amnt'];
    $uid = $_POST['uid'];

    $result = $contobj->addProductinTheCart($pName,$amount,$uid);

    //var_dump($result);
    //echo $uid;
}
//END OF THE IF STATMENT
}
?>