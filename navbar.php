<?php

$navigation = ['Home','about','products','discount','contact'];
if (isset($_SESSION['islogedin']))
{
    $viewobj = new View();
    $result = $viewobj->displayProductsOnTheCart($_SESSION['user']);

    $numberOfProductsInCart = count($result);
}
else {
    $numberOfProductsInCart = 0;
}
?>
<nav id="navbar" class="section1">
    <!-- Logo -->
    <div id="logo">
        <img src="./asset/pic/logos/Iconsmind-Outline-Butterfly.512.png" alt="LOGO">
    </div>
    <!-- navigational links -->
    <div id="links">    
        <a href="#sec1" id=""> home </a>
        <a href="#sec3" id=""> about </a>
        <a href="#sec6" id="">products</a>
        <a href="#sec2" id=""> discount </a>
        <a href="#sec7" id=""> contact </a>
        <div id="cart">
            <a href="#" id="car">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span id="num"><?php echo $numberOfProductsInCart;?></span>
            </a>
        </div>
        <?php 
            if (!isset($_SESSION['islogedin']))
            {
        ?>
        <a href="./login.php">Login</a>
        <?php
            }
            else {
        ?>
        <a href="#" id="user-name"><?php $name = $_SESSION['user']; echo strtoupper($name[0]); ?> </a>
        <a href="./scripts/logout.scripts.php">Logout</a>
        <?php
            }
        ?>
    </div>        
</nav>

<?php
?>
