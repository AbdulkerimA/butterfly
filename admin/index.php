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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_POST['name'])|| empty($_POST['price'])){
        echo "<script>alert('pleas fill all of the informations')</script>";
    }
    else {
        upload_image();

        // connect the controller and upload all the data
    }
}
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
            <!-- buton one -->
            <button id="selles" type="button">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                sales
            </button>
            <!-- buton one -->
            <button>
                <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                add products
            </button>
            <!-- buton two -->
            <button>
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                dump products
            </button>
            <!-- buton three -->
            <button>
                <i class="fa fa-user-o" aria-hidden="true"></i>
                subscribers 
            </button>
            <!-- buton four -->
            <button id="setting">
                <i class="fa fa-cog" aria-hidden="true"></i>
                setting
            </button>
        </div>
    </nav>

    <main>
        <?php /*
                <!-- salse section -->
                <!-- tiltle section -->
                <section id="sec1">
                    <article>
                      weekly sales summery 
                    </article>
                </section>
                <!-- section two for percent growth display -->
                <section id="sec2">
                    <article>
                        weekly growth rate in percent
                        <div id="percent">
                            <span id="number"><span id="num">50</span>%</span>
                        </div>
                         100 sold chocolates this week
                    </article>
                </section>
                <!-- section three for piechart of sold items -->
                <section id="sec3">
                    <article>
                        most sold chocolates this week
                        <div id="piechart">
                            <br> <br>
                            <span id="squer"> x</span>
                            fererrorocher 30 item 
                            <br> <br>
                            <span id="squer"> x</span>
                            fererrorocher 30 item 
                            <br> <br>
                            <span id="squer"> x</span>
                            fererrorocher 30 item 
                            <br> <br>
        
                        </div>
                    </article>
                </section>
        
                <!-- section four bargraph -->
                <section id="sec4">
                    <article>
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    </article>
                </section>
*/         
        ?>
        <!-- section five add products  -->
        <?php 
        /*
        <section id="sec5">
            <article>
                <header>
                    Add products
                </header>
            </article>
        </section>
        <!-- upload section 6-->
        <section  id="sec6">
            <article>
              <div id="container">
                    <!-- image of the product to be uploaded -->
                    <img src="" alt="product pic" id="image_preview">
                    
                    <form action="./index.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="file" id="upload-file"  onchange="preview()" hidden />
                        
                        <label class="btn-up" for="upload-file">Upload</label>
                        
                        <div id="amount">
                            <div id="minus" onclick>-</div>
                            <span id="pnumber"  contenteditable="true">0</span>
                            <div id="plus">+</div>
                        </div>
                        
                        <input type="text" name="name" id="name" placeholder="product name">
                        <input type="text" name="price" id="price" placeholder="price $0">
                        
                        <textarea name="dic" id="dic" cols="30" rows="10">product description</textarea>
                          <!-- ADD THE  product to the db -->
                        <button type="submit"> add product</button>
                    </form>

                </div>
            </article>
        </section>
        */
        ?>

        <!-- section 7 dump products section --> 
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

    </main>

    <!-- js -->
    <script src="../asset/js/admin.app.js"></script>
    <script language = "javascript" src="../asset/js/products.admin.app.js"></script>
</body>
</html>