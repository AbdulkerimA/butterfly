<?php

// this page is only accessable by post request 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

include "../inc/includes.admin.inc.php";

$contobj = new Controller();

$pName = $_POST['pName'];
$amount = $_POST['amnt'];
$uid = $_POST['uid'];

$result = $contobj->addProductinTheCart($pName,$amount,$uid);

//var_dump($result);
//echo $uid;
//END OF THE IF STATMENT
}
?>