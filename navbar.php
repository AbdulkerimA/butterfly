<?php

$navigation = ['Home','about','products','discount','contact'];
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
                <span id="num">0</span>
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
        <a href="#"><?php echo $_SERVER['username']; ?> </a>
        <?php
            }
        ?>
    </div>        
</nav>

<?php
?>
