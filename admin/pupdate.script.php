<?php

include "../inc/includes.admin.inc.php";

//echo $_POST['productname'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['productname'])){
        $contobj = new Controller();
        $result = $contobj->DeleteProduct($_POST['productname']);
        echo $result;
    }
    
    else if(isset($_POST['price'])){
        $pName = htmlspecialchars($_POST['pname']);
        $price = htmlspecialchars($_POST['price']);
        
        $contobj = new Controller();
        $result = $contobj->changePrice($pName,$price);

        echo $result;
    }
}




//

/*<?php
$viewobj = new View();
$products = $viewobj->displayProductForAdmin();

for ($i=0; $i<count($products);$i++){

?>
<tr>
    <td><img src="<?php echo $products[$i]['imgUrl'] ?>" alt="dov"></td>
    <td id="pName"><?php echo $products[$i]['pName'] ?></td>
    <td><input type="text" id="price" value="<?php echo $products[$i]['price']?>"></td>
    <td><?php echo $products[$i]['pAmount'] ?></td>
    <td><button>update</button></td>
    <td><i id="Delete" class="fa fa-trash-o" aria-hidden="true" onclick="DeleteReq()"></td>
</tr>
<?php
}
?>*/