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
                <div>
                <input type="checkbox" name="pr1" id="price-range-1">
                <span> under $30</span>
                </div>

                <div>
                <input type="checkbox" name="pr2" id="price-range-2">
                <span> $30-$90</span>
                </div>
                
                <div>
                <input type="checkbox" name="pr3" id="price-range-3">
                <span> $90-$120</span>
                </div>

                <div>
                <input type="checkbox" name="pr4" id="price-range-4">
                <span> ubove $90</span>
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
                            $brand = ['Dov','ferrero rocher','silk','kit kat','galaxy'];
                            foreach($brand as $b){
                                $i++;
                                echo "<div id='brand.".$i."'><input type='checkbox'> <span>".$b."</span></div>";
                            }
                        ?>
                    </div>
                    
                    <!-- type of chocolate -->
                    <div class="type">
                        <p id="title">chocolate type</p>
                        <?php 
                            $i =0;
                            $brand = ['Dark ','White ','milk ','biskut','mix'];
                            foreach($brand as $b){
                                $i++;
                                echo "<div id='brand.".$i."'><input type='checkbox'> <span>".$b."</span></div>";
                            }
                        ?>
                    </div>
               </div>
        </div> <!-- end of side panel div-->
       
        <!-- products section -->
        <div id="products">
            <?php
                // array of product full information from db 
                $pimage_link = [
                    './asset/pic/products/1.jpg','./asset/pic/products/caramels.jpg',
                    './asset/pic/products/darkmaltesers.jpg','./asset/pic/products/ferrerorochertjpg.jpg',
                    './asset/pic/products/kitkat.jpg','./asset/pic/products/maltesers.jpg',
                    './asset/pic/products/shopping.png','./asset/pic/products/shopping.png',
                    './asset/pic/products/shopping.png','./asset/pic/products/shopping.png',
                    './asset/pic/products/shopping.png','./asset/pic/products/shopping.png',
                    './asset/pic/products/shopping.png','./asset/pic/products/shopping.png'
                ];
                $i = 0;
                foreach($pimage_link as $url){
                    // display prod
            ?>
            <div id="product">
                <img src="<?php echo $pimage_link[$i]?>" alt="product1">
                <div id="pname">diary milk</div>
                <p id="pdisc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
                <div id="add-to-cart">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </div>
            </div>
            <?php 
                $i++; // increment the indexer
            }
            ?>
        </div>
    </main>
   <footer>
   <?php 
    include "./footer.php";
    ?>
   </footer>
   <script src="./asset/js/products.js"></script>
</body>
</html>