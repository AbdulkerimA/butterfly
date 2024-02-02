<?php
//session_start();

if(isset($_GET['load'])){
    session_start();
}
if (isset($_SESSION['islogedin'])){
    if ($_SESSION['user_type'] != 'admin'){
        header("Location:../product.php");
    }
}
else{
    header("Location:../login.php");
}

$error = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- link to admin page style -->
    <link rel="stylesheet" href="../asset/style/admin.style.css">
    <!-- fafa icons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- navigational bar --> 
    <nav id="nav">
        <div id="menu_btn">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <h3>Dashboard</h3>
        </div>   
        <div id="options"> 
            <form action="./index.php" method="get" id="options">
            <!-- buton one -->
            <button id="sales" type="submit" name="load" value="sales">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                sales
            </button>
            <!-- buton one -->
            <button id="addp" type="submit" name="load" value="addProduct">
                <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                add products
            </button>
            <!-- buton two -->
            <button id="dumppro" type="submit" name="load" value="dump">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                dump products
            </button >
            <!-- buton three -->
            <button id="sub" type="submit" name="load" value="userslist">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                subscribers 
            </button>
            <!-- buton four -->
            <button id="setting">
                <i class="fa fa-cog" aria-hidden="true"></i>
                setting
            </button>
            </form>
        </div>
    </nav>

    <main>

        <?php
        if (isset($_GET['load'])){
            $page = $_GET["load"] . ".index.php";
            //echo "<script> alert('".$page."')</script>";
            include($page);
        }
        ?>
       
    </main>

    <!-- js -->
    <script src="../asset/js/admin.app.js"></script> 
</body>
</html>