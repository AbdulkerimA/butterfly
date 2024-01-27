<?php
    // array of product full information from db 
    $pimage_link = [
        '/butterfly/asset/pic/products/1.jpg','/butterfly/asset/pic/products/caramels.jpg',
        '/butterfly/asset/pic/products/darkmaltesers.jpg','/butterfly/asset/pic/products/ferrerorochertjpg.jpg',
        '/butterfly/asset/pic/products/kitkat.jpg','/butterfly/asset/pic/products/maltesers.jpg',
        '/butterfly/asset/pic/products/shopping.png','/butterfly/asset/pic/products/shopping.png',
        '/butterfly/asset/pic/products/shopping.png','/butterfly/asset/pic/products/shopping.png',
        '/butterfly/asset/pic/products/shopping.png','/butterfly/asset/pic/products/shopping.png',
        '/butterfly/asset/pic/products/shopping.png','/butterfly/asset/pic/products/shopping.png'
    ];
    $i = 0;
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
      

        
     if($_POST['ptype'] == "30"){
        $pimage_link=[
            '/butterfly/asset/pic/products/shopping.png','/butterfly/asset/pic/products/shopping.png',
            '/butterfly/asset/pic/products/shopping.png','/butterfly/asset/pic/products/shopping.png',
            '/butterfly/asset/pic/products/shopping.png','/butterfly/asset/pic/products/shopping.png'
        ];
     }


     foreach($pimage_link as $url){
            // display products
    ?>
    <div id="product">
        <img src="<?php echo $pimage_link[$i]?>" alt="product1">
        <div id="pname">diary milk</div>
        <p id="pdisc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        </p>
        <p id="price-tag">$30</p>
        <div id="add-to-cart">
        <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
    </div>
    <?php 
        $i++; // increment the indexer
        }
    }

    // if this page is not requested with post (default loading page )
    else {
        foreach($pimage_link as $url){
            // display products
    ?>
    <div id="product">
        <img src="<?php echo $pimage_link[$i]?>" alt="product1">
        <div id="pname">diary milk</div>
        <p id="pdisc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        </p>
        <p id="price-tag">$30</p>
        <div id="add-to-cart">
        <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
    </div>
    <?php 
        $i++; // increment the indexer
        }
    }
    ?>