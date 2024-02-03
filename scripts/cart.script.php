<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    include "../inc/includes.admin.inc.php";
    
    $uid = $_POST['uid'];
    $viewobj = new View();
    $result = $viewobj->displayProductsOnTheCart($uid);

    //echo $result[0]['pName'];
    if (count($result) > 0){

?>

<h1 id="mycart">my cart</h1>

<?php 
for ($i=0;$i<count($result);$i++){
?>
<div id="prod-cont" class="prod-cont">
    <img src="<?php echo $result[$i]['imgUrl'] ?>" alt="selected product">
    <p id="item-name" class="item-name">
       <?php echo $result[$i]['pName'] ?>
    </p>
    <div id="amnt-controll">
        <span id="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
        <span id="amunt" class="amunt"><?php echo $result[$i]['amount'] ?></span>
        <span id="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
        <span id="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
    </div>
</div>
<?php
}
?>
<div id="pay">
    <span id="subtotal">subtotal $<span id="sum">10</span> </span>
    <button>checkout</button>
</div>

<?php
    }
}
?>