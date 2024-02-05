<?php
include "../inc/includes.admin.inc.php";

echo $_SERVER['REQUEST_METHOD'];

$uid = $_GET['user'];

$contobj = new Controller();
$result = $contobj->removeAllProductsFromCart($uid);

if ($result == "removed"){
    header("Location:../sucsess.php");
}
else{
    echo $result;
}