<?php 
?>



<h1 id="mycart">my cart</h1>

<?php
for ($i=0;$i<3;$i++){
?>
<div id="prod-cont">
    <img src="./asset/pic/mega-chocolate-brownie-sundae-.jpg" alt="selected product">
    <p id="item-name" class="item-name">
        mega-chocolate
    </p>
    <div id="amnt-controll">
        <span id="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
        <span id="amunt" class="amunt">1</span>
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