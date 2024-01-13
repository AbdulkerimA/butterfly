<?php
include "../inc/includes.inc.php";
session_start();
/*if (isset($_SESSION['islogedin'])){
    if ($_SESSION['user'] != 'admin'){
        header("Location:../login.php");
    }
}
else{
    header("Location:../login.php");
}*/
$error = null;
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_POST['name'])|| empty($_POST['price'])){
        echo "<script>alert('pleas fill all of the informations')</script>";
    }
    else {
        upload_image();

        // connect the controller and upload all the data
    }
}*/
function upload_image() {
    if (isset($_FILES['file'])){
        $file = $_FILES['file'];
        $path = "../asset/pic/";
        $file_to_be_uploaded = $path.basename($file['name']);
        // check if the file is actual image then upload

        $upload_status=move_uploaded_file($file['tmp_name'],$file_to_be_uploaded);

        // display a message if the file is uploaded successfuly 
        if ($upload_status) {
            echo "<script>alert('File uploaded successfully')</script>";
        }
        else {
            echo "<script>alert('insert an image uplod error".$file['error']."')</script>";
        }
    }
    else{
        // if the pic is not inserted
        $error = "insert a picture";
        echo "<script>alert('".$error."')</script>";
    }
}
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
        <!-- section five add products  -->
        <?php 

        ?>

        <!-- section 7 dump products section --> 
        <?php
        /*
        <section id="sec7">
            <article id="artic7">
                <header>
                    Delet products 
                </header>
            </article>
            <!-- products -->
            <div id="container2">
                <!-- list of all product -->
                <?php 
                    for ($i=1; $i<=20;$i++){
                ?>
                <div id="product">
                    <span id="del">X</span>
                    <img src="../asset/pic/chocolate-oblivion-cake-.jpg" alt="product">
                    <!-- product name -->
                    <p id="product_name">Dove</p>
                </div>
                <?php
                    }
                ?>
            </div>
        </section>
        

        <!-- section 8 users section -->
        <section id="sec8">
            <article id="artic8">
                <header>
                    list of subscribed users
                </header>
            </article>
            <div id="container3">
                <table id="table">
                    <!-- The heading for table -->
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Number of items he/she buys</th>
                        </tr>
                    </thead>

                    <!-- data of the table-->
                   <tbody>
                   <?php 
                        for ($i=1; $i<=30;$i++){
                    ?>
                    <tr>
                            <td><?php echo $i ?></td>
                            <td>Abdulkerim</td>
                            <td>abdulkerimademrcdf@gmail.com</td>
                            <td>+251904004053</td>
                            <td>10</td>
                    </tr>
                    <?php
                      }
                    ?>
                   </tbody>
                </table>
            </div>
        </section> 
        */
        ?> 
    </main>

    <!-- js -->
    <script src="../asset/js/admin.app.js"></script> 
    <!--  -->
    <!--  -->
</body>
</html>