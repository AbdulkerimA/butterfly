<?php
include "./inc/includes.inc.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butterfly</title>
    <!-- custom style -->
    <link rel="stylesheet" href="./asset/style/products.css">
    <!-- fafa icons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
    include "./navbar.php";
    ?>
    <main>
        <!-- side menu section -->
        <div id="side-panel">
            <?php /*
               <!-- amount control page -->
               <p>choose amount</p>
               <div id="controll">
                <span id="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                <span id="amunt">1</span>
                <span id=""><i class="fa fa-minus" aria-hidden="true"></i></span>
               </div> */
               ?>
               <h2>catagorization</h2>
               <p id="prage">price range</p>
               <div id="range-collection">
                <div onclick="loadProduct('All','All')">
                    <input type="checkbox" name="pr1" id="price-range-1">
                    <span> All </span>
                </div> 
                
                <div onclick="loadProduct('byprice','30')">
                    <input type="checkbox" name="pr1" id="price-range-1">
                    <span> under $30</span>
                </div>

                <div onclick="loadProduct('byprice','90')">
                <input type="checkbox" name="pr2" id="price-range-2">
                <span> $30-$90</span>
                </div>
                
                <div onclick="loadProduct('byprice','120')">
                <input type="checkbox" name="pr3" id="price-range-3">
                <span> $90-$120</span>
                </div>

                <div onclick="loadProduct('byprice','121')">
                <input type="checkbox" name="pr4" id="price-range-4">
                <span> ubove $120</span>
                </div>
                <!-- end of price range div-->
               </div>

               <!-- catagory selection section -->
               <div id="catagory">
                    <!-- custom drop down -->
                    <div class="brand">
                        <p id="title">brands</p>
                        <?php 
                            $i =0;
                            $brand = ['Dov','ferrero rocher','silk','kit kat','milks'];
                            foreach($brand as $b){
                                $i++;
                                ?>
                                <div id="brand<?php echo $i ?>" onclick="loadProduct('byname','<?php echo $b ?>')">
                                    <input type='checkbox'> 
                                    <span><?php echo $b ?></span>
                                </div>
                            <?php
                            }
                        ?>
                    </div>
                    
                    <!-- type of chocolate -->
                    <div class="type">
                        <p id="title">chocolate type</p>
                        <?php 
                            $i =0;
                            $brand = ['Dark ','White ','milk ','biskut','mix','chocolate cake'];
                            foreach($brand as $b){
                                $i++;
                                ?>

                               <div id="brand<?php echo $i ?>" onclick="loadProduct('bytype','<?php echo $b ?>')">
                                    <input type='checkbox'> 
                                    <span><?php echo $b ?></span>
                               </div>
                        <?php
                            }
                        ?>
                    </div>
               </div>
        </div> <!-- end of side panel div-->
       
        <!-- products section -->
        <div id="products">
          <?php 
            include "./scripts/products.script.php";
          ?>
        </div>

        <!-- the cart -->
        <div id="cart-display">
                <?php
                    include "./scripts/cart.script.php";
                ?>
        </div>

    </main>

   <footer>
   <?php 
    include "./footer.php";
    ?>
   </footer>

    <script> 
    let uid ="<?php echo $_SESSION['user'];?>";
    </script>
    
    <script src="./asset/js/products.js" defer> </script>
</body>
</html>