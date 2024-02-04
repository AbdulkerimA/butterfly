<?php
    // array of product full information from db    
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        $viewobj = new View();
        $product = $viewobj->displayProductForUsers();    
    }
    //$i = 0;

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
       
        include_once "../inc/includes.admin.inc.php";
        $viewobj = new View();

        if (isset($_POST['byprice'])){
            //echo "price";
            $str_ = $_POST['type'];
            $product = $viewobj->displaySingleTypeProduct("price",$str_);
            //var_dump($product);
            //unset($_POST['byprice']);
        }
        elseif(isset($_POST['byname'])){
            $str_ = $_POST['type'];
            $product = $viewobj->displaySingleTypeProduct("name",$str_);
            unset($_POST['byname']);
        }
        elseif(isset($_POST['bytype'])){
            $str_ = $_POST['type'];
            $product = $viewobj->displaySingleTypeProduct("chocolatetype",$str_);
            unset($_POST['bytype']);
        }
        else{
            $product = $viewobj->displayProductForUsers();
        }

        

//     if(isset($_POST['ptype'])){

 //    }


     for($i=0;$i<count($product);$i++){
            // display products
        //if($_POST['byprice'] == $product[$i]['price']){
    ?>
    <div id="product" class="prod">
        <img src="<?php echo $product[$i]['imgUrl']?>" alt="product">
        <div id="pname"><?php echo $product[$i]['pName']?></div>
        <p id="pdisc">
            <?php echo $product[$i]['pdisc']?>. 
        </p>
        <p id="price-tag<?php echo $i?>" class="price-tag"><?php echo "$".$product[$i]['price']?></p>
        <div id="add-to-cart<?php echo $i?>" class="add-to-cart">
        <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
    </div>
    <?php 
        //$i++; // increment the indexer
            }
        }
    //}

    // if this page is not requested with post (default loading page )
    else {
        for($i=0;$i<count($product);$i++){
            // display products
    ?>
    <div id="product" class="prod">
        <img src="<?php echo $product[$i]['imgUrl']?>" alt="product">
        <div id="pname"><?php echo $product[$i]['pName']?></div>
        <p id="pdisc">
            <?php echo $product[$i]['pdisc']?>. 
        </p>
        <p id="price-tag<?php echo $i?>" class="price-tag"><?php echo "$".$product[$i]['price']?></p>
        <div id="add-to-cart<?php echo $i?>" class="add-to-cart">
        <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>
    </div>
    <?php 
        //$i++; // increment the indexer
        }
    }
    ?>