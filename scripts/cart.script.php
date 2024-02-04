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
        <!-- minus button -->
        <span id="minus<?php echo $i; ?>" class="minus" onclick="decreaseAmount(<?php echo $i; ?>)">
            <i class="fa fa-minus" aria-hidden="true"></i>
        </span>
        <!-- amount -->
        <span id="amunt<?php echo $i; ?>" class="amunt"><?php echo $result[$i]['amount'] ?></span>
        <!-- add button -->
        <span id="plus<?php echo $i; ?>" class="plus" onclick="addAmount(<?php echo $i; ?>)">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </span>
        <!-- delete button -->
        <span id="delete<?php echo $i; ?>" class="delete" onclick=" deleteProductOnCart(<?php echo $i; ?>)">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
        </span>

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
    else {
        echo '<h1 id="mycart">my cart</h1>';
        echo "no product is added";
        echo '<div id="pay">
                <span id="subtotal">subtotal $<span id="sum">10</span> </span>
                <button>checkout</button>
              </div>';
    }
}
?>