<?php
/*if (isset($_SESSION['islogedin'])){
    if ($_SESSION['user'] != 'admin'){
        header("Location:../login.php");
    }
}
else{
    header("Location:../login.php");
}*/
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
                    <img src="<?php if(isset($_POST['img'])){echo "../asset/pic/";}?>" alt="product pic">
                    
                    <form action="./index.php" method="post">
                        <input type="file" id="upload-file" hidden />
                        <label class="btn-up" for="upload-file">Upload</label>
                        <div id="amount">
                            <span id="minus">-</span>
                            <span id="pnumber">10</span>
                            <span id="plus">+</span>
                        </div>
                        <input type="text" name="name" id="name" placeholder="product name">
                        <textarea name="dic" id="dic" cols="30" rows="10">product discription</textarea>
                          <!-- ADD THE  product to the db -->
                         <button type="submit"> add product</button>
                    </form>

                </div>
            </article>
        </section>
    </main>

    <!-- js -->
    <script src="../asset/js/admin.app.js"></script>
</body>
</html>